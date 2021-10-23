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

  add_theme_support( 'editor-color-palette', [
    [
      'name'  => esc_attr( 'Color 1', 'wp-starter' ),
      'slug'  => 'color-1',
      'color' => get_theme_mod( 'theme_color_1', '#000' )
    ], [
      'name'  => esc_attr( 'Color 2', 'wp-starter' ),
      'slug'  => 'color-2',
      'color' => get_theme_mod( 'theme_color_2', '#FFF' )
    ]
  ]);

  add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'theme_add_theme_support');