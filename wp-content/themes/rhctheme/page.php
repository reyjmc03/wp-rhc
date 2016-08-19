<?php
# Programmer: Jose Mari Caballa Rey
# Date Created: 02 July 2016
# Description: To create a customized theme for the RODERICK HALL COLLECTION website
# File Type: PHP file
# File Name: page.php
# Location: ../rhctheme/page.php
?>


<?php get_header(); ?>
<div class="page animated fadein" id="page">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
				<?php if(have_posts()): ?>
			    <?php while(have_posts()) : the_post(); ?>
			      <center><h3><strong><?php the_title(); ?></strong></h3></center>
			      <?php the_content(); ?>
			    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>