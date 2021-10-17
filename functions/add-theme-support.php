<?php

function theme_add_theme_support() {

  add_theme_support( 'align-wide' );

  add_theme_support( 'custom-logo', [
    'height'               => 100,
    'width'                => 200,
    'flex-height'          => false,
    'flex-width'           => false,
  ] );
  add_theme_support( 'responsive-embeds' );

  add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'theme_add_theme_support');