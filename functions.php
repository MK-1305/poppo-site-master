<?php
function theme_styles() {
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'main-script', get_template_directory_uri().'/main.js', array('jquery'), false, true );
    wp_localize_script('main-script', 'my_data', array(
        'template_directory_uri' => get_template_directory_uri(),
    ));
    wp_enqueue_script( 'hamburger-script', get_template_directory_uri() . '/hamburger.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
?>