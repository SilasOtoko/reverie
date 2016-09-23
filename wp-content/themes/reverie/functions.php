<?php

add_theme_support( 'post-thumbnails');

add_image_size( 'profile', 400, 400, true );

add_image_size( 'large', 1200, 500, true );

add_image_size( 'banner', 1600, 500, true );

add_theme_support( 'menus' );

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}

add_action( 'init', 'remove_editor_init' );

function remove_editor_init() {
  // If not in the admin, return.
  if ( ! is_admin() ) {
     return;
  }

  // Get the post ID on edit post with filter_input super global inspection.
  $current_post_id = filter_input( INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT );
  // Get the post ID on update post with filter_input super global inspection.
  $update_post_id = filter_input( INPUT_POST, 'post_ID', FILTER_SANITIZE_NUMBER_INT );

  // Check to see if the post ID is set, else return.
  if ( isset( $current_post_id ) ) {
     $post_id = absint( $current_post_id );
  } else if ( isset( $update_post_id ) ) {
     $post_id = absint( $update_post_id );
  } else {
     return;
  }

  // Don't do anything unless there is a post_id.
  if ( isset( $post_id ) ) {
    // Get the template of the current post.
    $template_file = get_post_meta( $post_id, '_wp_page_template', true );

    // Example of removing page editor for page-your-template.php template.
    if (  'page-products.php' === $template_file ) {
       remove_post_type_support( 'page', 'editor' );
       // Other features can also be removed in addition to the editor. See: https://codex.wordpress.org/Function_Reference/remove_post_type_support.
    }
  }
}

add_action('init', 'init_remove_support',100);

function init_remove_support(){
    $post_type = 'class';
    remove_post_type_support( $post_type, 'editor');
}

//unhooking woocomerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//adding custom theme wrappers
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="content-area">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}

//declare woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
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
