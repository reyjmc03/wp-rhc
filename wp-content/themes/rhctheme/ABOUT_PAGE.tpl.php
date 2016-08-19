<?php 
/**
  * Template Name: ABOUT TEMPLATE
  */
?>
<?php get_header(); ?>
<div class="page animated fadein" id="page">
	<center><h3 style="margin-bottom:0px !important"><strong><?php the_title(); ?></strong></h3></center>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php while ( have_posts() ) : the_post(); ?>
	        <?php the_content(); ?>
	        <?php //comments_template( '', true ); ?>
	      <?php endwhile; // end of the loop. ?>
      </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>