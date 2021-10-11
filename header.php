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
  printf('<body %s>', 'class="' . esc_attr( implode( ' ', get_body_class() ) ) . '"' );
    wp_body_open();
    wp_nav_menu(
      ['theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'navbar',
      'depth' => '2']
    );