<?php 
/**
  * Template Name: SEARCH TEMPLATE
  */
?>

<?php
require ('php/kohadb.php'); // koha connection string

$query = '
SELECT biblio.*, biblioimages.* 
FROM biblio 
  JOIN biblioimages
    ON biblioimages.biblionumber = biblio.biblionumber
LIMIT 1000
';

$rows = $lib_db->get_results($query);
?>



<?php get_header(); ?>


<div class="page animated fadein" id="page">
    <center><h3><strong><?php the_title(); ?></strong></h3></center>
    <br>  
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
                                    <p class="bsth-p">SEARCH ITEMS</p>
                                </div>
                                <div class="bst-record-count">
                                    <p class="bsth-p"><?php echo $n; ?> RECORD/S</p>
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
                                  <!-- <img class="img-responsive img-hover" src="http://placehold.it/206x224" alt=""> -->
                                  <?php echo '<img class="img-responsive img-hover" width="206" height="224" src="data:image/jpeg;base64,'.base64_encode($obj->thumbnail).'"/>'; ?>
                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 nogap">
                                            <div class="bstr-det">
                                                <h3 class="book-title"><?php echo $obj->title; ?> <span><?php echo $obj->author; ?></span></h3>
                                                
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
<br>
<br>
<?php get_footer(); ?>

<script type="text/javascript">
$(document).ready(function() {
  $('#browse-search-table').DataTable({
    bFilter: false, 
    bInfo: false,
    bLengthChange: false,
    columnDefs: [{
      targets: "_all",
      orderable: false,
    }],
    pagingType: "simple_numbers"
  });
});
</script>