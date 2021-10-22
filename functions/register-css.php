<?php 

function theme_register_main_stylesheets() {
  // html-elements
  wp_enqueue_style( 'html-elements', 
    get_stylesheet_directory_uri() . '/css/html-elements.css',
    [],
    wp_get_theme()->get('Version')
  );
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
  // colors.css
  wp_enqueue_style( 'colors-stylesheet',
    get_stylesheet_directory_uri() . '/css/colors.css',
    [],
    wp_get_theme()->get('Version')
  );

  if( get_comments_number() > 0 ):
    wp_enqueue_style( 'comments-stylesheet',
      get_stylesheet_directory_uri() . '/css/comments.css',
      [],
      wp_get_theme()->get('Version')
    );
  endif;
}
add_action( 'wp_enqueue_scripts', 'theme_register_main_stylesheets' );