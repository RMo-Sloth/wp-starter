<?php
require_once get_template_directory() . '/functions/custom-colors.php';
require_once get_template_directory() . '/functions/register-css.php';

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

function theme_custom_logo() {
  add_theme_support( 'custom-logo', [
    'height'               => 50,
    'width'                => 100,
    'flex-height'          => false,
    'flex-width'           => false,
  ] );
}
add_action('after_setup_theme', 'theme_custom_logo');

function theme_register_sidebars() {
  register_sidebar( [
    'id' => 'footer-1',
    'name' => __( 'Footer 1', 'wp-starter' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_sidebar' => '<div class="sidebar footer-1">',
    'after_sidebar' => '</div>', 
  ] );

  register_sidebar( [
    'id' => 'footer-2',
    'name' => __( 'Footer 2', 'wp-starter' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_sidebar' => '<div class="sidebar footer-2">',
    'after_sidebar' => '</div>',
  ] );

  register_sidebar( [
    'id' => 'footer-3',
    'name' => __( 'Footer 3', 'wp-starter' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_sidebar' => '<div class="sidebar footer-3">',
    'after_sidebar' => '</div>',
  ] );

  register_sidebar([
    'id' => 'front-page-top',
    'name' => __( 'Home top', 'wp-starter' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_sidebar' => '<div class="sidebar front-page-top">',
    'after_sidebar' => '</div>',
  ]);
}
add_action( 'widgets_init', 'theme_register_sidebars' );