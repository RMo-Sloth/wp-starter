<?php 

function theme_customize_colors( $wp_customize ) {
  //add color 1
  $wp_customize->add_setting(
    'theme_color_1',
    [
      'type' => 'theme_mod',
      'default' => '#000',
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );

  $color_1_control = new WP_Customize_Color_Control( $wp_customize, 'theme_color_1', [
    'label' => __( 'Color 1', 'wp-starter' ),
    'section' => 'colors'
  ]);
  $wp_customize->add_control( $color_1_control );

   // add color 2
   $color_2 = '#FFF';
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
  list($red_1, $yellow_1, $blue_1) = sscanf(get_theme_mod( 'theme_color_1', '#FFF' ), '#%2x%2x%2x');
  list($red_2, $yellow_2, $blue_2) = sscanf(get_theme_mod( 'theme_color_2', '#FFF' ), '#%2x%2x%2x');
  printf( 
    "<style>
      :root {
        --color-1: %s;
        --color-2: %s;
      }
      .has-color-1-color {
        color: %s;
      }
      .has-color-2-color {
        color: %s;
      }

      .has-color-1-background-color {
        background-color: %s;
      }
      .has-color-2-background-color {
          background-color: %s;
      }
    </style>",
    get_theme_mod( 'theme_color_1', '#000' ),
    get_theme_mod( 'theme_color_2', '#FFF' ),
    get_theme_mod( 'theme_color_1', '#000' ),
    get_theme_mod( 'theme_color_2', '#FFF' ),
    get_theme_mod( 'theme_color_1', '#000' ),
    get_theme_mod( 'theme_color_2', '#FFF' ),
  );

    // "rgb($red_1, $yellow_1, $blue_1)",
}
add_action( 'wp_head', 'theme_css_colors');