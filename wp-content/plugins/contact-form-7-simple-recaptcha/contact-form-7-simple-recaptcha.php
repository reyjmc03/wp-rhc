<?php
/*
Plugin Name: Contact Form 7 Simple Recaptcha
Description: Add No CAPTCHA reCAPTCHA to Contact Form 7
Version: 0.0.1
Author: 247wd
*/

$cf7sr_key = get_option( 'cf7sr_key' );
$cf7sr_secret = get_option( 'cf7sr_secret' );

if ( ! empty( $cf7sr_key ) && ! empty( $cf7sr_secret ) && ! is_admin() )
{
    add_action( 'init', 'register_cf7sr_script' );
    add_action( 'wp_footer', 'print_cf7sr_script' );
    
    function register_cf7sr_script()
    {
        wp_register_script( 'cf7sr_script', 'https://www.google.com/recaptcha/api.js' );
    }
    
    function print_cf7sr_script()
    {
        global $cf7sr;
    
        if ( ! $cf7sr )
        {
            return;
        }
    
        wp_print_scripts( 'cf7sr_script' );
    }
    
    add_filter( 'wpcf7_form_elements', 'cf7sr_wpcf7_form_elements' );
    
    function cf7sr_wpcf7_form_elements( $form )
    {
        $form = do_shortcode( $form );
        return $form;
    }
    
    function cf7sr_shortcode( $atts )
    {
        global $cf7sr;
        $cf7sr = true;
        $cf7sr_key = get_option( 'cf7sr_key' );
        return '<div class="g-recaptcha" data-sitekey="' . $cf7sr_key . '"></div>';
    }
    add_shortcode( 'cf7sr-simple-recaptcha', 'cf7sr_shortcode' );
    
    add_action( 'wpcf7_before_send_mail', 'cf7sr_verify_recaptcha' );
    function cf7sr_verify_recaptcha( $form )
    {
        $submission = WPCF7_Submission::get_instance();
        $data = $submission->get_posted_data();
        if ( $data["_wpcf7"] > 0 )
        {
            $cf7_text = do_shortcode( '[contact-form-7 id="' . $data["_wpcf7"] . '"]' );
            $cf7sr_key = get_option( 'cf7sr_key' );
            if ( false !== strpos( $cf7_text, $cf7sr_key ) )
            {
                if ( !empty( $data["g-recaptcha-response"] ) )
                {
                    $cf7sr_secret = get_option( 'cf7sr_secret' );
                    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $cf7sr_secret . '&response=' . $data["g-recaptcha-response"];
                    $request = wp_remote_get( $url );
                    $body = wp_remote_retrieve_body( $request );
                    $response = json_decode( $body );
                    if ( isset ( $response->success ) && 1 == $response->success )
                    {
                        return;
                    }
                }
                $message = get_option( 'cf7sr_message' );
                if ( '' == $message )
                {
                    $message = 'Invalid captcha';
                }
                $error = (object) array(
                    'message' => $message
                );
                $status = json_encode( $error );
                echo $status; die();
            }   
        }
    }
}

if ( is_admin() )
{
    function cf7sr_adminhtml()
    {
        if ( !current_user_can( 'manage_options' ) )
        {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        if ( !empty ( $_POST['update'] ) )
        {
            $cf7sr_key = !empty ( $_POST['cf7sr_key'] ) ? sanitize_text_field( $_POST['cf7sr_key'] ) : '';
            update_option ( 'cf7sr_key', $cf7sr_key );
            
            $cf7sr_secret = !empty ( $_POST['cf7sr_secret'] ) ? sanitize_text_field( $_POST['cf7sr_secret'] ) : '';
            update_option ( 'cf7sr_secret', $cf7sr_secret );
            
            $cf7sr_message = !empty ( $_POST['cf7sr_message'] ) ? sanitize_text_field( $_POST['cf7sr_message'] ) : '';
            update_option ( 'cf7sr_message', $cf7sr_message );
      	
            $updated = 1;
        }
        ?>
    		<div class="cf7sr-wrap">
    			<h2>Contact Form 7 Simple Recaptcha Settings</h2>
    			<p>You can generate Site key and Secret key <a target="_blank" href="https://www.google.com/recaptcha/admin/create">here</a>. Once generated, paste them below for this plugin to work.
    			<br>To add Recaptcha to CF7 form, add <strong>[cf7sr-simple-recaptcha]</strong> in your form ( preferable above submit button )</p>
    			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
    				<input type="hidden" value="1" name="update" />
    				<ul>
    					<li><input type="text" style="width: 370px;" value="<?php echo get_option( 'cf7sr_key' ); ?>" name="cf7sr_key" /> Site key</li>
    					<li><input type="text" style="width: 370px;" value="<?php echo get_option( 'cf7sr_secret' ); ?>" name="cf7sr_secret" /> Secret key</li>
    					<li><input type="text" style="width: 370px;" value="<?php echo get_option( 'cf7sr_message' ); ?>" name="cf7sr_message" /> Invalid captcha error message</li>
    				</ul>
    	   			<input type="submit" class="button-primary" value="Save Settings">
    			</form>
    			<?php if ( ! empty( $updated ) ): ?>
       				<p>Settings were updated successfully!</p>
       			<?php endif; ?>
    		</div>		
        <?php 
    }
    
    function cf7sr_addmenu()
    {
        add_submenu_page (
			'options-general.php',
			'CF7 Simple Recaptcha',
			'CF7 Simple Recaptcha',
			'manage_options',
			'cf7sr_edit',
			'cf7sr_adminhtml'
		);
    }
    
    add_action( 'admin_menu', 'cf7sr_addmenu' );
}