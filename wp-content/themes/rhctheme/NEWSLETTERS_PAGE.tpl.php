<?php 
/**
  * Template Name: NEWSLETTERS TEMPLATE
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

$collection_name = 'Newsletters';
?>



<?php get_header(); ?>
<?php include(locate_template('/php/dynamic-pages/dynamic-browse.php')); ?>
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
    bSortClasses: false
  });
});
</script>