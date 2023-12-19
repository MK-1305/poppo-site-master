<?php
function theme_styles() {
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
    wp_enqueue_script( 'hamburger-script', get_template_directory_uri() . '/hamburger.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
?>
