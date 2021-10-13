<?php 

function theme_register_main_stylesheets() {
  // reset.css
  wp_enqueue_style( 'reset-stylesheet',
    get_stylesheet_directory_uri() . '/css/reset.css',
    [],
    wp_get_theme()->get('Version')
  );
  // style.css
  wp_enqueue_style( 'general-stylesheet',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );

  // css/footer.css
  wp_enqueue_style( 'footer-stylesheet',
    get_stylesheet_directory_uri().'/css/footer.css',
    [],
    wp_get_theme()->get('Version')
  );

  // css/header.css
  wp_enqueue_style( 'header-stylesheet',
    get_stylesheet_directory_uri().'/css/header.css',
    [],
    wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'theme_register_main_stylesheets' );