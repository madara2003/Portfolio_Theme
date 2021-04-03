<?php
/**
 * Theme Functions
 */
function theme_name_scripts() {
    wp_enqueue_style( 'main_style', get_stylesheet_uri() );
    wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/47c392d60b.js' );
    wp_enqueue_style( 'custom-fonts', '//fonts.gstatic.com' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );