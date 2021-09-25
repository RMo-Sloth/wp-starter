<?php

// GENERAL SETUP
function theme_support_title_tag() {
  // Let wordpress handle the title tag
  add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'theme_support_title_tag');

function theme_nav_menus() {
  register_nav_menu( 'primary', __('Primary Menu', 'wp-starter') );
}
add_action('after_setup_theme', 'theme_nav_menus');


function theme_register_main_stylesheet() {
  // register the main stylesheet
  wp_enqueue_style( 
    'general-stylesheet', 
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'theme_register_main_stylesheet' );