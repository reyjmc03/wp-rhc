<?php 
/**
  * Template Name: DVD'S TEMPLATE
  */
?>


<?php 
$n='1000';
$collection_name = "DVD's";
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