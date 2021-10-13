<?php
require_once get_template_directory() . '/functions/custom-colors.php';
require_once get_template_directory() . '/functions/register-css.php';
require_once get_template_directory() . '/functions/register-sidebars.php';

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