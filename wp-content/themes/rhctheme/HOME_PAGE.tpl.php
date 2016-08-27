<?php 
/**
  * Template Name: HOME TEMPLATE
  */
?>

<?php
require ('php/kohadb.php'); // koha connection string

$query = '
SELECT biblio.*, biblioimages.* 
FROM biblio 
  JOIN biblioimages
    ON biblioimages.biblionumber = biblio.biblionumber
LIMIT 2
';

$rows = $lib_db->get_results($query);

?>

<?php get_header(); ?>

<div class="page animated fadein" id="page">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php //comments_template( '', true ); ?>
  <?php endwhile; // end of the loop. ?>
  
  <?php # -------------------- begin collections ------------------- ?>
  <div class="collections">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  				<p class="header">THE COLLECTIONS</p>
  			</div>
  		</div>

  		<div class="row">

        <!-- 1. newsletters -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Newsletters<br><span>&nbsp;</span</p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. </p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/newsletters' ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. images -->
  			<div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
          	<div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Images<br><span>&nbsp;</span</p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
              	<a href="<?php echo get_option('home') . '/the-collections/images' ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- 3. video files -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-2.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Video Files<br><span>&nbsp;</span</p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/video-files'; ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- dvds -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
          	<div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-2.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">DVDs<br><span>(Films, Documentaries, etc.)</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
              	<a href="<?php echo get_option('home') . '/the-collections/dvds' ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- texts -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-2.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Texts<br><span>(Books, Manuscripts)</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/dvds' ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- articles -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Articles<br><span>&nbsp;</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/articles/' ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- online resources -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Online Resources<br><span>(Website articles, etc.)</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/online-resources/'; ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- online videos -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Online Videos<br><span>&nbsp;</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/online-videos/'; ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- us army publications -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
          	<div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-3.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">US Army Publications<br><span>&nbsp;</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
              	<a href="<?php echo get_option('home') . '/the-collections/us-army-publications' ?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- researched accounts -->
        <div class="col-md-4 col-sm-12">
          <div class="panel panel-default text-center panel-collections">
            <div class="panel-heading pc-heading">
              <span>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/collection-1.jpg">
              </span>
            </div>

            <div class="panel-body pc-body">
              <p class="pcb-header">Researched Accounts<br><span>&nbsp;</span></p>
              <p class="pcb-content">
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua.</p>
              <div class="pcb-link">
                <a href="<?php echo get_option('home') . '/the-collections/researched-accounts/';?>" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

  		</div>
  	</div>
  </div>
 	<?php # ---------------------- end collections ------------------- ?>

























  <?php # ---------------------- begin recently added ------------------- ?>
  <div class="recently-added">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="header">RECENTLY ADDED</p>

          <?php //for ($i=0; $i < $n ; $i++): ?>
          <?php foreach ($rows as $obj): ?>
          <div class="ra-row animated fadein">
            <div class="row">
              <div class="col-lg-4 col-sm-12" style="/*background: red;*/">
                <div class="rar-image">
                  <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/430x225" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-8 col-sm-12" style="/*background: blue;*/">
                <div class="rar-det">
                  <h3 class="book-title">NIHONGUN NO HORYO SEISAKU <span>Utsumi Aiko</span></h3>
                  
                  <p class="link"><a href="/items/show/1763" class="permalink">Nihongun no horyo seisaku = [The Japanese Army and the POW policies : white POWs and Asian POWs]  /  Utsumi Aiko</a></p>
            
                  <div class="tag-vlink">
                    <i class="tag fa fa-tag fa-2x" aria-hidden="true">&nbsp;<span><i>books, japan, history</i></span></i>
                  
                    <div class="view-link">
                      <a href="#" >View item&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                  </div>
                  
                </div> 
              </div>
            </div>
            <hr class="rar-hr">
          </div>
          <?php endforeach; ?>
          <?php  //endfor; ?>
        </div>
      </div>
    </div>
  </div>
  <?php # ------------------------ end recently added ------------------- ?>



</div>

<?php get_footer(); ?>