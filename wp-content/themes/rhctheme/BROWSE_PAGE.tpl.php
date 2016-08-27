<?php 
/**
  * Template Name: BROWSE TEMPLATE
  */
?>

<?php 
require ('php/kohadb.php'); // koha connection string

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
  min-height: 186px;
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

.page .tc-recently-added 
.recently-added-panel {
  margin-bottom: 20px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.page .tec-recently-added 
.recently-added-panel span {
  margin-right: 10px;
}

.page .tc-recently-added 
.recently-added-panel span img {
  width: 160px;
  height: 186px;
}

.page .tc-recently-added 
.recently-added-panel span h5 {
  font-size: 19px;
  color: #ff6600;
  font-weight: bold;
  padding-top: 10px;
  margin-right: 10px;

  /*-o-text-overflow: ellipsis;*/   /* Opera */
   /* text-overflow:    ellipsis*/;   /* IE, Safari (WebKit) */
  /*  overflow:hidden;  */            /* don't show excess chars */
    /*white-space:nowrap*/;           /* force single line */
}

.page .tc-recently-added 
.recently-added-panel span p {
  font-size: 14px;
  overflow: hidden;
  -o-text-overflow: ellipsis;   /* Opera */
  text-overflow:    ellipsis;   /* IE, Safari (WebKit) */
  height: 90px;
  word-wrap: break-word;
  margin-right: 10px;
}

.page .tc-recently-added 
.recently-added-panel span a {
  font-size: 18px !important;
  margin-right: 10px;
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
          <div class="recently-added-panel">
              <span> 
                <img class="img-responsive" src="http://placehold.it/160X186" align="left">
                <h5>To inspire and To Lead</h5>
                <p>
                  The letters of Gen. Vicente Lim detailing his views on the Philippine defense
                  and the Philippine Army, errors being made by MacArthur and other issues.
                </p>
                <div align="right">
                   <a href="http://localhost/rhc/the-collections/dvds" class="pcb-link">View item <i class="fa fa-arrow-right"></i></a>
                </div>
              </span>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="recently-added-panel">
              <span> 
                <img class="img-responsive" src="http://placehold.it/160X186" align="left">
                <h5>To inspire and To Lead</h5>
                <p>
                  The letters of Gen. Vicente Lim detailing his views on the Philippine defense
                  and the Philippine Army, errors being made by MacArthur and other issues.
                </p>
                <div align="right">
                   <a href="http://localhost/rhc/the-collections/dvds" class="pcb-link">View item <i class="fa fa-arrow-right"></i></a>
                </div>
              </span>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="recently-added-panel">
              <span> 
                <img class="img-responsive" src="http://placehold.it/160X186" align="left">
                <h5>To inspire and To Lead</h5>
                <p>
                  The letters of Gen. Vicente Lim detailing his views on the Philippine defense
                  and the Philippine Army, errors being made by MacArthur and other issues.
                </p>
                <div align="right">
                   <a href="http://localhost/rhc/the-collections/dvds" class="pcb-link">View item <i class="fa fa-arrow-right"></i></a>
                </div>
              </span>
          </div>
        </div>


       <!--  <div class="col-md-4 col-sm-12">
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
        </div> -->

        <!-- <div class="col-md-4 col-sm-12">
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
        </div> -->

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