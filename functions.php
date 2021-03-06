<?php
/*Style sheet*/
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

/*Jquery sheet*/
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

//h2 tag
function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function register_menus_for_work_mangement() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )//Locations I have added one only main
    )
  );
}
add_action( 'init', 'register_menus_for_work_mangement' );
?>