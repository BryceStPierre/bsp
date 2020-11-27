<?php
/*
 * Theme functions.
 */

function bsp_scripts () {

  // Enqueue CSS stylesheets.
  wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ) );
  wp_enqueue_style( "font-awesome-free", get_theme_file_uri( "/assets/css/all.min.css" ) );
  wp_enqueue_style( "google-fonts", "https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap", false );
  wp_enqueue_style( "style", get_stylesheet_uri() );
 
  // Enqueue JavaScript scripts.
  wp_enqueue_script( "bootstrap", get_theme_file_uri( "/assets/js/bootstrap.bundle.min.js" ), array( "jquery" ) );

  // Enqueue JavaScript for threaded comments.
  if ( is_singular() && comments_open() && get_option( "thread_comments" ) ) {
    wp_enqueue_script( "comment-reply" );
  }
}
add_action( "wp_enqueue_scripts", "bsp_scripts" );

function bsp_setup () {
  
  // Add default posts and comments RSS feed links to head.
  add_theme_support( "automatic-feed-links" );

  // Add title tag support to let WordPress manage the page title.
  add_theme_support( "title-tag" );
  
  // Add post thumbnails and featured image support.
  add_theme_support( "post-thumbnails" );

  // Add theme support for selective refresh for widgets.
  add_theme_support( "customize-selective-refresh-widgets" );

  // Add custom logo support.
  add_theme_support( "custom-logo", array(
    "width"       => 200,
    "height"      => 60,
    "flex-width"  => true,
    "flex-height" => true
  ) );

  // Register navigation menus.
  register_nav_menus( array(
    "main-menu"      => __( "Main Menu", "bsp" ),
  ) );
}
add_action( "after_setup_theme", "bsp_setup" );

function bsp_widgets_init () {

//   // Registers sidebar.
//   register_sidebar( array(
//     "name"          => __( "Sidebar", "brycestrap" ),
//     "id"            => "sidebar",
//     "description"   => __( "Add widgets to the sidebar.", "brycestrap" ),
//     "before_widget" => "<div class="widget %2$s mb-4" id="%1$s">",
//     "after_widget"  => "</div>",
//     "before_title"  => "<h4>",
//     "after_title"   => "</h4>"
//   ) );

  // Registers three footer widget areas: footer, footer-2, footer-3.
  register_sidebars( 3, array(
    "name"          => __( "Footer %d", "bsp" ),
    "id"            => "footer",
    "description"   => __( "Add widgets to the footer area.", "bsp" ),
    "before_widget" => '<div class="widget %2$s" id="%1$s">',
    "after_widget"  => "</div>",
    "before_title"  => "<h4>",
    "after_title"   => "</h4>"
  ) );
}
add_action( "widgets_init", "bsp_widgets_init" );

require get_template_directory() . "/inc/customizer.php";

?>