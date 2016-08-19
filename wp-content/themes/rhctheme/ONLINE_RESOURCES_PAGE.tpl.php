<?php 
/**
  * Template Name: ONLINE RESOURCES TEMPLATE
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
$collection_name = 'Online Resources';
?>


<?php get_header(); ?>
<?php include(locate_template('dynamic-browse.php')); ?>
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

