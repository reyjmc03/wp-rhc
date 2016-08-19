<?php
# Programmer: Jose Mari Caballa Rey
# Date Created: 24 June 2016
# Description: To create a customized theme for the RODERICK HALL COLLECTION webiste
# File Type: PHP file
# File Name: index.php
# Location: ../rhctheme/index.php
?>

<?php get_header(); ?>
<div class="page animated fadein" id="page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if ( have_posts() ): ?>
					<?php /* Start the loop */ ?>
					<?php while ( have_posts() ): the_post(); ?>
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
					<?php endwhile; ?>
				<?php else: ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
