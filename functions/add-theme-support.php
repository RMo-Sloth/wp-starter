<?php

function theme_support_logo() {
    add_theme_support( 'custom-logo', [
      'height'               => 100,
      'width'                => 200,
      'flex-height'          => false,
      'flex-width'           => false,
    ] );
}
add_action('after_setup_theme', 'theme_support_logo');

function theme_support_title_tag() {
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'theme_support_title_tag');  