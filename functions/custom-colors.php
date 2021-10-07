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

  // add color 4
  $color_4 = 'f1f1f1';
  $wp_customize->add_setting(
    'theme_color_4',
    [
      'type' => 'theme_mod',
      'default' => $color_4,
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );

  $color_4_control = new WP_Customize_Color_Control( $wp_customize, 'theme_color_4', [
    'label' => __( 'Color 4', 'wp-tester' ),
    'section' => 'colors'
  ]);
  $wp_customize->add_control( $color_4_control );

  // add color 7
  $wp_customize->add_setting(
    'theme_color_7',
    [
      'type' => 'theme_mod',
      'default' => '#333',
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );

  $color_7_control = new WP_Customize_Color_Control( $wp_customize, 'theme_color_7', [
    'label' => __( 'Color 7', 'wp-starter' ),
    'section' => 'colors'
  ]);
  $wp_customize->add_control( $color_7_control );
}
add_action( 'customize_register', 'theme_customize_colors' );

function theme_css_colors() {
  printf( 
    "<style>
      :root {
        --color-1: %s;
        --color-3: %s;
        --color-4: %s;
        --color-7: %s;
      }
    </style>",
    get_theme_mod( 'theme_color_1', '#FFF' ),
    get_theme_mod( 'theme_color_2', '#F9F9F9' ),
    get_theme_mod( 'theme_color_4', '#f1f1f1' ),
    get_theme_mod( 'theme_color_7', '#333' )
  );
}
add_action( 'wp_head', 'theme_css_colors');