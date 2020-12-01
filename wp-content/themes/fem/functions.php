<?php
 
// Setup
define('FM_DEV_MODE', true);

// Includes
include(get_theme_file_path( './includes/front/enqueue.php' ));
include(get_theme_file_path( './includes/setup.php' ));

// Hooks and Actions
add_action( 'wp_enqueue_scripts', "fm_enqueue" );
add_action( 'after_setup_theme', 'fm_setup_theme');

// Shortcodes

?>