<?php get_header(); ?>

<div class="page" id="page" style="margin-top:40px;">
  
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-lg-9">
        <?php if ( have_posts() ) : ?>
          <header class="page-header">
            <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'rhctheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          </header>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'search' ); ?>

          <?php endwhile; ?>
        <?php else: ?>
           <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<br>
<?php get_footer(); ?>