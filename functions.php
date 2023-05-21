<?php

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_footer', 'theme_scripts');
add_action('after_setup_theme', 'theme_register_menu');

function theme_register_menu() {
  register_nav_menu( 'top', ' Верхнее навигационное меню');
}

function theme_styles() {
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/index.css');
}

function theme_scripts() {
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/index.js');
}