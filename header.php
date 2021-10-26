<?php 
print('<!DOCTYPE html>');
printf('<html %s>', get_language_attributes() );
printf('
<head>
  <meta charset="%s">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">',
  get_bloginfo('charset')
);
  wp_head();
print('</head>');
  printf( '<a href="#theme-skip-link-destination" id="theme-skip-link">%s</a>', __('Skip the navigation') );
  printf('<body class="%s"><div class="top-bar">', esc_attr( implode( ' ', get_body_class() ) ) );
    wp_body_open();
    
    if( function_exists('the_custom_logo') ):
      the_custom_logo();
    endif;

    wp_nav_menu(
      ['theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'navbar',
      'depth' => '2']
    );
    print( '<span id="theme-skip-link-destination"></span>');
  print('</div>');