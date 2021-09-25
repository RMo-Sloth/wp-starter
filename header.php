<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>
  <meta charset=""<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
wp_nav_menu([ 
  'theme_location' => 'primary',
  'container' => 'nav',
  'container_class' => 'navbar',
  'depth' => '2'
]);
?>