<?php
/*
Plugin Name: Patch for Revolution Slider
Author: Dragos Gaftoneanu
Description: This plugin repairs the vulnerabilities in Revolution Slider without the need to update your plugin and/or theme.
Version: 2.4.1
Author URI: http://dragosgaftoneanu.com/
*/

/*******************************************************************************************************

The following functions will block the existent known vulnerabilities in Revolution Slider for Wordpress.

1. revsliderpatch_blocklfd()
-> This function blocks the Local File Download vulnerability in wp-admin/admin-ajax.php

2. revsliderpatch_blockafl()
-> This function blocks the Arbitrary File Upload vulnerability in wp-admin/admin-ajax.php
-> The vulnerability is best known from the SoakSoak campaign in December 2014
-> The function patches both Revolution Slider and Showbiz Pro

3. revsliderpatch_blockxss()
-> This function blocks an old persistent XSS vulnerability (for versions older than 4.2)

*******************************************************************************************************/

revsliderpatch_blocklfd();
revsliderpatch_blockafl();
revsliderpatch_blockxss();

function revsliderpatch_blocklfd()
{
	global $wpdb;

	if(stristr($_SERVER["SCRIPT_FILENAME"],"/wp-admin/admin-ajax.php"))
	{
		$file = preg_replace('/[^\da-zA-Z0-9 -_.]/i', '', $_GET['img']);
		$q = @explode(".",$file);
		$accepted = array("jpg","JPG","jpeg","gif","png","PNG","GIF","");
		if (!in_array($q[count($q)-1],$accepted))
		{
			$wpdb->query($wpdb->prepare("insert into revsliderpatch_blacklist(IP,date,exploit) values ('%s','%d','%s')",$_SERVER['REMOTE_ADDR'],time(),"Local File Download"));
			die("Revolution Slider hack attempt detected and logged.");
		}
	}
}

function revsliderpatch_blockafl()
{
	global $wpdb;

	if(stristr($_SERVER["SCRIPT_FILENAME"],"/wp-admin/admin-ajax.php"))
	{
		if($_POST['action'] != "")
			$_POST['action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_POST['action']);
		else
			$_POST['action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_REQUEST['action']);
		if($_POST['client_action'] != "")
			$_POST['client_action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_POST['client_action']);
		else
			$_POST['client_action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_REQUEST['client_action']);
		if ((stristr($_POST['action'],"revslider_ajax_action") || stristr($_POST['action'],"showbiz_ajax_action")) && $_POST['client_action']=="update_plugin")
		{
			$wpdb->query($wpdb->prepare("insert into revsliderpatch_blacklist(IP,date,exploit) values ('%s','%d','%s')",$_SERVER['REMOTE_ADDR'],time(),"Arbitrary File Upload"));
			die("Revolution Slider hack attempt detected and logged.");
		}
	}
}

function revsliderpatch_blockxss()
{
	global $wpdb;	

	if(stristr($_SERVER["SCRIPT_FILENAME"],"/wp-admin/admin-ajax.php"))
	{
		if($_POST['action'] != "")
			$_POST['action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_POST['action']);
		else
			$_POST['action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_REQUEST['action']);
		if($_POST['client_action'] != "")
			$_POST['client_action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_POST['client_action']);
		else
			$_POST['client_action'] = preg_replace('/[^a-zA-Z_\-0-9]/i', '', $_REQUEST['client_action']);
		if ((stristr($_POST['action'],"revslider_ajax_action") || stristr($_POST['action'],"showbiz_ajax_action")) && $_POST['client_action']=="update_captions_css")
		{
			$_POST['data'] = htmlentities($_POST['data'],ENT_QUOTES);
		}
	}
}

/* Create an admin menu with options to manage */
add_action("admin_menu","revsliderpatch_main");

function revsliderpatch_main()
{
	revsliderpatch_install();

	add_menu_page('Patch for Revolution Slider', 'Patch for Revolution Slider', 'administrator', 'revsliderpatch', 'revsliderpatch_list');
	add_submenu_page('revsliderpatch', 'Black list', 'Black list', 'administrator', 'revsliderpatch', 'revsliderpatch_list');
	add_submenu_page('revsliderpatch', 'Donate', 'Donate', 'administrator', 'pcgcatalog_donate', 'revsliderpatch_donate');
}

function revsliderpatch_install()
{
	global $wpdb;

	$wpdb->query("CREATE TABLE IF NOT EXISTS `revsliderpatch_blacklist` (`ID` int(11) NOT NULL,`IP` text NOT NULL,`date` text NOT NULL,`exploit` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
}

function revsliderpatch_list()
{
	global $wpdb;
?>
<div class="wrap">
	<h1>Black list</h1>
	Below is a list with everyone who attempted to use a Revolution Slider exploit to gain access to your website.<br /><br />

	<?php
		if($_GET['del']=="true")
		{
			if($_GET['hash'] == md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . DB_PASSWORD))
				$wpdb->query("truncate table revsliderpatch_blacklist");
		}

		$lists = $wpdb->get_results("select * from revsliderpatch_blacklist");
		if(!empty($lists))
		{
	?>
			<input onClick="document.location='admin.php?page=revsliderpatch&del=true&hash=<?php echo md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . DB_PASSWORD); ?>';" type="button" name="button" class="button button-primary" value="Clear the list"/><br /><br />

			<table class="wp-list-table widefat fixed" style="margin-top:10px;">
			<thead>
				<tr>
					<th>IP</th>
					<th>Blocked at</th>
					<th>Exploit</th>
				</tr>
			</thead>

			<tfoot>
				<tr>
					<th>IP</th>
					<th>Blocked at</th>
					<th>Exploit</th>
				</tr>
			</tfoot>


				<tbody>

				<?php
					$elements = $wpdb->get_results("select count(*) as counter from revsliderpatch_blacklist");
					$perpage = 20;
		
					$pag = (int) $_GET['pag'];
					if($pag <= 0) {$pag = 1;}

					if($pag > ceil($elements[0]->counter/$perpage)) {$pag = 1;}

					$lists = $wpdb->get_results("select * from revsliderpatch_blacklist order by ID desc limit " . ($pag-1) . ", $perpage");

					$i = -1;
					foreach($lists as $list)
					{
						if($i % 2 == 0)
							echo '<tr class="alternative">';
						else
							echo '<tr>';
						echo '<td>'.$list->IP.'</td>';
						echo '<td>'.date('j.m.Y H:i:s T P',$list->date).'</td>';
						echo '<td>'.$list->exploit.'</td>';
						echo '</tr>';
					}
				?>          

				</tbody>
			</table>
			<br /><br />
			<div style="width:100%;">
				<div style="float:left;width:50%"><?php echo $elements[0]->counter; ?> attackers in total</i></div>
				<div style="float:left;text-align:right;width:50%">
					<?php
							if($pag > 1)
							{
								?>
							<input type="button" onClick="document.location='admin.php?page=revsliderpatch&pag=<?php echo $pag-1; ?>';" class="button button-primary" value="Prev page"/>&nbsp;&nbsp;<?php
							}			
							if($pag < ceil($elements[0]->counter/$perpage))
							{
								?><input type="button" onClick="document.location='admin.php?page=revsliderpatch&pag=<?php echo $pag+1; ?>';" class="button button-primary" value="Next page"/><?php
							}
					?>
				</div>
			</div>
<?php
		}else{
			echo "Nothing to show for now.";
		}
	?>
</div>
<?php
}

function revsliderpatch_donate()
{
?>
<div class="wrap">
	<h1>Donate</h1>
	If you feel secure using "Patch for Revolution Slider", why don't you buy me a beer?<br /><br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
<?php
}
