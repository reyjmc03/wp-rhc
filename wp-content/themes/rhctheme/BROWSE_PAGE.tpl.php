<?php 
/**
  * Template Name: BROWSE TEMPLATE
  */
?>

<?php 
include('kohadb.php'); 

//$query = 'SELECT COUNT("bilionumber") AS bibliocount FROM biblioimages LIMIT 100';
$query = '
SELECT biblio.*, biblioimages.* 
FROM biblio 
	JOIN biblioimages
		ON biblioimages.biblionumber = biblio.biblionumber
LIMIT 100
';
$rows = $lib_db->get_results($query);

$n = '50';

?>

<style type="text/css">
/* recently added in browse page*/
.page .tc-recently-added {
	background-color: #e2e2e2 !important;
}

.page .tc-recently-added .header {
  height: auto !important;
  margin-top: 20px;
  margin-bottom: 40px;
  text-align: center;
  color: #666666;
  font-weight: bold;
  font-size: 21px;
}

.page .browse-items {
	margin-top: 30px;
	margin-bottom: 40px;
}
</style>

<?php get_header(); ?>
<div id="page" class="page animated fadein">
	<?php # ---------------------- begin recently added ------------------- ?>
  <div class="tc-recently-added">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="header">RECENTLY ADDED</p>
        </div>
      </div>
      <div class="row">
  			<div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
          	<div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="http://localhost/rhc/wp-content/themes/rhctheme/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Images</p>
              <p class="pcb-content">
             	</p>
              <div class="pcb-link">
              	<a href="http://localhost/rhc/the-collections/images" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
          	<div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="http://localhost/rhc/wp-content/themes/rhctheme/images/collection-2.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">DVDs</p>
              <p class="pcb-content">
              </p>
              <div class="pcb-link">
              	<a href="http://localhost/rhc/the-collections/dvds" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
          	<div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="http://localhost/rhc/wp-content/themes/rhctheme/images/collection-3.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">US Army Publications</p>
              <p class="pcb-content">
              </p>
              <div class="pcb-link">
              	<a href="http://localhost/rhc/the-collections/us-army-publications" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

  		</div>
    </div>
  </div>
 	<?php # ------------------------ end recently added ------------------- ?>

 	<?php # ---------------------- begin browse items ------------------- ?>
	<div class="browse-items">
		<div class="container">
			<div class="row">
				<?php get_sidebar(); ?>
				<div class="col-lg-8 col-lg-offset-1">
					<div class="bs-table">

            <table id="browse-search-table" class="" cellspacing="0" border="0" width="100%">
              <thead>
                <tr>
                  <th>        
                    <div class="bst-header">
                        <p class="bsth-p">CORRESPONDENCE COLLECTION</p>
                    </div>
                    <div class="bst-record-count">
                        <p class="bsth-p"><?php echo $n; ?> TOTAL</p>
                    </div>
                  </th>
                </tr>
              </thead>
                <tbody>
                  <?php foreach ($rows as $obj): ?>
                  <?php //for ($i=0; $i < $n; $i++): ?>
                  <tr>
                      <td>
                          <div class="bst-row">
                              <div class="row">
                                  <div class="col-lg-3 nogap">
                                      <div class="bstr-image">
                                          <a href="portfolio-item.html">
                            <img class="img-responsive img-hover" src="http://placehold.it/206x224" alt="">
                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-9 nogap">
                                      <div class="bstr-det">
                                          <h3 class="book-title">NIHONGUN NO HORYO SEISAKU <span>Utsumi Aiko</span></h3>
                                          
                                          <p class="link"><a href="/items/show/1763" class="permalink"><?php //echo $obj->upperagelimit; ?>test test test test test test test test test test test test test test test test test test test test test</a></p>
                                          
                                          <i class="tag fa fa-tag" aria-hidden="true">&nbsp;<span><i>books, japan, history</i></span></i>
                                          
                                          <p class="collect-format"><b>COLLECTION: <span>US Army publications</span></b>&emsp;&emsp;&emsp;&emsp;<b>FORMAT: <span>Online resource</span></b></p>
                                      </div> 
                                  </div>
                              </div>
                              <hr class="rhc-hr">
                          </div>
                      </td>
                  </tr>
                  <?php //endfor; ?>
                  <?php endforeach; ?>
              </tbody> 
            </table>

          </div>
				</div>
			</div>
		</div>
	</div>
	<?php # ------------------------ end browse items ------------------- ?>
</div>
<?php get_footer(); ?>

<script type="text/javascript">
$(document).ready(function() {
  $('#browse-search-table').DataTable({
    bFilter: false, 
    bInfo: false,
    bLengthChange: false,
    columnDefs: [{
      targets: "_all",
      orderable: false
    }],
    pageLength: 5,
  });
});
</script>