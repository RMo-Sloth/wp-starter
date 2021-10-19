<?php 

function theme_customize_colors( $wp_customize ) {
  //add color 1
  $wp_customize->add_setting(
    'theme_color_1',
    [
      'type' => 'theme_mod',
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );

  $color_1_control = new WP_Customize_Color_Control( $wp_customize, 'theme_color_1', [
    'label' => __( 'Color 1', 'wp-starter' ),
    'section' => 'colors'
  ]);
  $wp_customize->add_control( $color_1_control );

   // add color 2
   $color_2 = '#F9F9F9';
   $wp_customize->add_setting( 
    'theme_color_2',
    [
      'type' => 'theme_mod',
      'default' => $color_2,
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );
  $color_2_control = new WP_Customize_Color_Control( $wp_customize, 'theme_color_2', [
    'label' => __( 'Color 2', 'wp-starter' ),
    'section' => 'colors'
  ]);
  $wp_customize->add_control( $color_2_control );
  
}
add_action( 'customize_register', 'theme_customize_colors' );

function theme_css_colors() {
  printf( 
    "<style>
      :root {
        --color-1: %s;
        --color-3: %s;
      }
    </style>",
    get_theme_mod( 'theme_color_1', '#FFF' ),
    get_theme_mod( 'theme_color_2', '#F9F9F9' ),
  );
}
add_action( 'wp_head', 'theme_css_colors');