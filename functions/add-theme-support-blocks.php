<?php

function theme_add_theme_support_blocks() {

  add_theme_support( 'align-wide' );

  add_theme_support( 'responsive-embeds' );

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
  add_theme_support( 'editor-gradient-presets', [
    [
        'name' => esc_attr__( 'Gradient 1', 'wp-starter' ),
        'gradient' => 'linear-gradient(' . get_theme_mod( 'theme_color_1', '#000' ) . ' 33%, ' . get_theme_mod( 'theme_color_2', '#000' ) .' 100%' . ')',
        'slug' => 'gradient-1'
    ]
  ]);

}
add_action('after_setup_theme', 'theme_add_theme_support_blocks');
