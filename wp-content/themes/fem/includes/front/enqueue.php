<?php
// ju_enqueue
function fm_enqueue() {
    $uri = get_theme_file_uri();

    // Register
    wp_register_style('fm_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
    wp_register_style('fm_bootstrap', $uri . '/assets/css/bootstrap.css');
    wp_register_style('fm_style', $uri . '/assets/css/style.css');
    wp_register_style('fm_dark', $uri . '/assets/css/dark.css');
    wp_register_style('fm_font_icons', $uri . '/assets/css/font-icons.css');
    wp_register_style('fm_animate', $uri . '/assets/css/animate.css');
    wp_register_style('fm_magnific_popup', $uri . '/assets/css/magnific-popup.css');
    wp_register_style('fm_responsive', $uri . '/assets/css/responsive.css');
    wp_register_style('fm_custom', $uri . '/assets/css/custom.css');

    // Enqueue styles
    wp_enqueue_style('fm_google_fonts');
    wp_enqueue_style('fm_bootstrap');
    wp_enqueue_style('fm_style');
    wp_enqueue_style('fm_dark');
    wp_enqueue_style('fm_font_icons');
    wp_enqueue_style('fm_animate');
    wp_enqueue_style('fm_responsive');
    wp_enqueue_style('fm_custom');


    // Register scripts
    wp_register_script( 'fm_plugins', $uri . '/assets/js/plugins.js', [], false, true );
    wp_register_script( 'fm_functions', $uri . '/assets/js/functions.js', [], false, true );

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('fm_plugins');
    wp_enqueue_script('fm_functions');
}