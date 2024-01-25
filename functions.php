<?php

function slyles_and_scripts(){
  wp_enqueue_style( 'maincss', get_template_directory_uri().'/assets/css/style.css');
  wp_enqueue_script( 'mainscript', get_template_directory_uri().'/assets/js/script.js');
}

add_action( 'wp_enqueue_scripts', 'slyles_and_scripts', 1 ); 


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>
