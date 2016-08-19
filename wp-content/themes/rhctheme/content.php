<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-item-wrap">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			 	<?php the_post_thumbnail( 'rhctheme-featured', array( 'class' => 'single-featured' )); ?>
		</a>
		<div class="post-inner-content">
			
			
		</div>
	</div>
</article><!-- #post-## -->