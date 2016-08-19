<?php 
/**
  * Template Name: CONTACT US TEMPLATE
  */
?>
<?php get_header(); ?>

<div id="page" class="page animated fadein"> 
	<center><h3><strong><?php the_title(); ?></strong></h3></center>
	<br>
  <div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php //comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>