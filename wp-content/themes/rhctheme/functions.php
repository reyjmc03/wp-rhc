<?php
/*
* Programmer: Jose Mari Caballa Rey
* Date Created: 24 June 2016
* Description: To create a customized theme for the RODERICK HALL COLLECTION webiste
* File Type: PHP file
* File Name: functions.php
* Location: ../rhctheme/functions.php
*/
?>
<?php

# REGISTER MENUS
function rhctheme_my_menu() {
	register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'rhctheme_my_menu' );

# TEMPLATE SELECTION IN PAGE ATTRIBUTES
function my_post_templater($template){
  if( !is_single() )
    return $template;
  global $wp_query;
  $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
  return empty( $c_template ) ? $template : $c_template;
}
add_filter( 'template_include', 'my_post_templater' );

function give_my_posts_templates(){
  add_post_type_support( 'post', 'page-attributes' );
}
add_action( 'init', 'give_my_posts_templates' );


// css submenu walker class
class CSS_Menu_Walker extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);

    // Change sub-menu to dropdown menu
    // $output .= "\n$indent<div class='container submenu submenu-left'>
    // <div class='row'>
    // <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
    // <div class='sub-main-menu'>
    // <ul class='nav'>\n";
    $output .= "\n$indent
    <ul role=\"menu\" class=\"dropdown-menu\">\n";
  }
  function end_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    // $output .= "$indent</ul>
    // </div>
    // </div>
    // </div>
    // </div>\n";
    $output .= "$indent</ul>\n";
  }
}


# REGISTER WIDGETS
function rhctheme_widgets_init() {
	register_sidebar( array( 
		'name' 					=> __( 'Search Widget Area', 'rhctheme' ),
		'id'	 					=> 'search-widget',
		'description' 	=> __( 'Appears under the header section of the site.', 'rhctheme' ),
		'before_widget' => '',
		'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'		=> '',
	) );

	register_sidebar( array(
		'name'					=> __( 'Newsletter Register Footer', 'rhctheme' ),
		'id'						=> 'newsletter-reg-footer',
		'description'		=> __( 'Appears to create a newsletter registration form', 'rhctheme' ),
		'before_widget'	=> '',
		'after_widget' 	=> '',
		'before_title' 	=> '',
		'after_title' 	=> '',
	) );

	register_sidebar( array(
		'name'					=> __( 'Article Share Widget', 'rhctheme' ),
		'id'						=> 'article-share-widget',
		'description'		=> __( 'Used to put a share social media widget in single display article page', 'rhctheme' ),
		'before_widget'	=> '<div class="art-share-icon">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '',
		'after_title' 	=> '',
	) );

	register_sidebar( array(
		'name'					=> __( 'Left Sidebar Widget', 'rhctheme' ),
		'id'						=> 'left-sidebar-widget',
		'description'		=> __( 'A widget to used in sidebar of webpage.', 'rhctheme' ),
		'before_widget'	=> '',
		'after_widget' 	=> '',
		'before_title' 	=> '',
		'after_title' 	=> '',
	) );

	// register_sidebar(
	// 	'name'					=> __('Refine Search')
	// );
}
add_action( 'widgets_init', 'rhctheme_widgets_init' );




if ( ! function_exists( 'rchtheme_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable.
 *
 * @since Twenty Eleven 1.0
 *
 * @param string $html_id The HTML id attribute.
 */
function rhctheme_content_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // rhctheme_content_nav



# Enqueue scripts and styles
function rhctheme_scripts() {
	#######
	# CSS #
	#######
	/* default stylesheet */
	wp_enqueue_style( 'rhctheme-style', get_template_directory_uri() . '/style.css' );
	/* font awesome stylesheet */
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.css' );
	/* bootstrap modern business css (some part) */
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/modern-business.css' );
 	/* bootstrap stylesheet */
 	wp_enqueue_style( 'rhctheme-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
 	/* jquery datatables css */
 	wp_enqueue_style( 'jquery-dataTables', get_template_directory_uri() . '/css/jquery.dataTables.min.css' ); 
 	/* bootsidemenu stylesheet */
 	wp_enqueue_style( 'rhctheme-bootsidemenu', get_template_directory_uri() . '/css/bootsidemenu.css' );
 	/* submenu stylesheet */
 	wp_enqueue_style( 'rhctheme-submenu', get_template_directory_uri() . '/css/submenu.css' );
 	/* animate stylesheet (animate.css) */
 	wp_enqueue_style( 'rhctheme-animate', get_template_directory_uri() . '/css/animate.css' );
 	/* bootstrap date and time picker */
 	wp_enqueue_style( 'rhctheme-bootstrap-datetimepicker', get_template_directory_uri() . '/css/bootstrap-datetimepicker.css' );
 	/* bootstrap carousel css */
 	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/carousel.css' );

 ##############
 # JAVASCRIPT #
 ##############
	/* jquery javascript */
	//wp_enqueue_script( 'rhctheme-jquery-js', get_template_directory_uri() . '/js/jquery.min.js' );
	/* jquery migrate javascript */
	//wp_enqueue_script( 'rhctheme-jquery-migrate-js', get_template_directory_uri() . '/js/jquery-migrate.min.js' );
	/* boostrap javasctipt */
	wp_enqueue_script( 'rhctheme-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	/* sidebar menu */
	wp_enqueue_script( 'rhctheme-sidebar-js', get_template_directory_uri() . '/js/sidebar.js' );
	/* submenu javascript */
	wp_enqueue_script( 'rhctheme-submenu-js', get_template_directory_uri() . '/js/submenu.js' );

	/* date/time picker javascript */
	if (is_page('advance-search')):
	 wp_enqueue_script( 'rhctheme-moment-with-locales-js', get_template_directory_uri() . '/js/moment-with-locales.js' );
	 wp_enqueue_script( 'rhctheme-bootstrap-datetimepicker-js', get_template_directory_uri() . '/js/bootstrap-datetimepicker.js' );
	 wp_enqueue_script( 'rhctheme-submenu-js', get_template_directory_uri() . '/js/datetimepicker.js' );
	endif;

	/* jquery datatables javascript */
	 //wp_enqueue_script( 'dataTables-bootstrap-js', get_template_directory_uri() . '/js/moment-with-locales.js' );
	 wp_enqueue_script( 'jquery-dataTables-js', get_template_directory_uri() . '/js/jquery.dataTables.js' );

	/* advance search ajax javascript */
	wp_enqueue_script( 'advance-search-ajax-js', get_template_directory_uri() . '/js/advance-search.ajax.js' );
}
add_action( 'wp_enqueue_scripts', 'rhctheme_scripts' );

/**
 * Load custom nav walker
 */
require get_template_directory() . '/php/navwalker.php';