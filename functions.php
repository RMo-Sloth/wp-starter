<?php
require_once get_template_directory() . '/functions/custom-colors.php';
require_once get_template_directory() . '/functions/register-css.php';
require_once get_template_directory() . '/functions/register-sidebars.php';
require_once get_template_directory() . '/functions/add-theme-support.php';

function theme_nav_menus() {
  register_nav_menu( 'primary', __('Primary Menu', 'wp-starter') );
}
add_action('after_setup_theme', 'theme_nav_menus');