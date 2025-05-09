<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
function my_custom_scripts() {
	wp_enqueue_script( 'custom-js-basic', get_stylesheet_directory_uri() . '/js/basic.js', array( 'jquery' ),'',true );
} 

add_filter('single_template','single_function');

function single_function($t){
  foreach( (array) get_the_category() as $cat ) {
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") )
      return TEMPLATEPATH . "/single-{$cat->term_id}.php";
  }
  return $t;
}
?>
