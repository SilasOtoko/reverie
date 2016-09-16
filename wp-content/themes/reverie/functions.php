<?php

add_theme_support( 'post-thumbnails');

add_theme_support( 'menus' );

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}

function register_theme_menus() {

  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus');

function reverie_theme_styles(){

  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css');
  wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Alegreya:400,700|Source+Sans+Pro:400,400i,600');
  wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");

}
add_action( 'wp_enqueue_scripts', 'reverie_theme_styles' );

function reverie_theme_js(){

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
  wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '', true );

}
add_action('wp_enqueue_scripts', 'reverie_theme_js' );

?>
