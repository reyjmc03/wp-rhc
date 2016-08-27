<?php
# Programmer: Jose Mari Caballa Rey
# Date Created: 24 June 2016
# Description: To create a customized theme for the RODERICK HALL COLLECTION webiste
# File Type: PHP file
# File Name: header.php
# Location: ../rhctheme/header.php
?>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="vieport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta name="application-name" content="<?php bloginfo('name')?>" />
  <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
  <?php wp_head('rhctheme'); ?>
  <script>var $ = jQuery.noConflict();</script>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?<?php echo date('l js \of F Y h:i:s A'); ?>">
</head>
 
<?php ############################ START OF BODY AND HTML ############################ ?>
<body>
<?php #---------------------------------- begin header and sidebar ---------------------------------- ?>
<nav class="navbar navbar-default rhc-nav navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="header">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <div class="navbar-brand navbar-brand-centered">
          <div class="animated pulse">
          <a class="" href="<?php echo get_option('home'); ?>">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png">
          </a>
          </div>
        </div>
      </div>
      <!-- /Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
          <li>
            <button class="rhc-menu" id="rhc-menu">
              <span class="fa fa-bars fa-lg fa-menu white"></span>&nbsp;<strong class="menu">MENU</strong>
            </button>
          </li>
        </ul>

        <div class="sm-donate-button-header">
          <a href="http://www.ayalafoundation.org/donate/donate-2/" class="btn  navbar-nav btn-rhc" role="button"><b>DONATE</b></a>

          <div class="social-media">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://web.facebook.com/ayalafoundation"><i class="fa fa-facebook fa-lg white"></i></a></li>
              <li><a href="https://twitter.com/ayalafoundation?lang=en"><i class="fa fa-twitter fa-lg white"></i></a></li>
              <li><a href="https://www.linkedin.com/company/ayala-foundation"><i class="fa fa-linkedin fa-lg white"></i></a></li>
            </ul>
          </div>
        </div>

      </div><!-- /.navbar-collapse -->
      <!-- /Collect the nav links, forms, and other content for toggling -->
    </div>
  </div>


  <!--Test -->
  <div class="container sidebar sidebar-left" style="left:-330px;">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidebar-bg" data-side="left">
      <?php wp_nav_menu(array(
         'walker'            => new Rhc_Menu_Walker,
         'theme_location'    => 'primary',
         'container'         => 'div',
         'container_class'   => 'side-main-menu',
         'menu_class'        => 'nav',
         'menu_id'           => '',
         'echo'              => true,
         'fallback_cb'       => 'wp_page_menu',
         'before'            => '',
         'after'             => '',
         'link_before'       => '',
         'link_after'        => '',
         'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
         'depth'             => 0
       )); ?>

      <hr>

      <div class="social-media">
        <ul class="nav navbar-nav">
          <li><a href="https://web.facebook.com/ayalafoundation"><i class="fa fa-facebook fa-lg white"></i></a></li>
          <li><a href="https://twitter.com/ayalafoundation?lang=en"><i class="fa fa-twitter fa-lg white"></i></a></li>
          <li><a href="https://www.linkedin.com/company/ayala-foundation"><i class="fa fa-linkedin fa-lg white"></i></a></li>
        </ul>
      </div>

      <a href="http://www.ayalafoundation.org/donate/donate-2/" class="btn btn-rhc" role="button"><b>DONATE</b></a>
      <!-- <br>
      <button id="btn-sub" class="btn  btn-rhc"><b>TEST SUBMENU</b></button> -->
      </div>
    </div>
  </div>
  <!--/Test -->
</nav>
<?php #---------------------------------- end header and sidebar ------------------------------------ ?>


<?php #---------------------------------- begin search bar ---------------------------------- ?>
<div class="search-bar">
  <div class="<?php echo (is_front_page()) ? 'search-bar-bg animated fadein' : 'search-bar-only'; ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php dynamic_sidebar( 'search-widget' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php #------------------------------------- end search bar ---------------------------------- ?>

