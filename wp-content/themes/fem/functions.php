<?php
 
// Setup


// Includes
include(get_theme_file_path( './includes/front/enqueue.php' ));

// Hooks and Actions
add_action( 'wp_enqueue_scripts', "fm_enqueue" );

// Shortcodes

?>