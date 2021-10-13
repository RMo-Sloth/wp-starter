<?php

function theme_register_footer_sidebars() {
    register_sidebar( [
        'id' => 'footer-1',
        'name' => __( 'Footer 1', 'wp-starter' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_sidebar' => '<div class="sidebar footer-1">',
        'after_sidebar' => '</div>', 
    ] );

    register_sidebar( [
        'id' => 'footer-2',
        'name' => __( 'Footer 2', 'wp-starter' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_sidebar' => '<div class="sidebar footer-2">',
        'after_sidebar' => '</div>',
    ] );

    register_sidebar( [
        'id' => 'footer-3',
        'name' => __( 'Footer 3', 'wp-starter' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_sidebar' => '<div class="sidebar footer-3">',
        'after_sidebar' => '</div>',
    ] );

}
add_action( 'widgets_init', 'theme_register_footer_sidebars' );

function theme_register_frontpage_sidebars() {
    register_sidebar([
        'id' => 'front-page-top',
        'name' => __( 'Home top', 'wp-starter' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_sidebar' => '<div class="sidebar front-page-top">',
        'after_sidebar' => '</div>',
    ]);
}
add_action( 'widgets_init', 'theme_register_frontpage_sidebars' );
