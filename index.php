<?php
/**
 * Plugin Name: Anchour Module Library
 * Description: Pre-packaged modules for flexible-content fields.
 * Version: 0.1
 * License: none
 */

/**
 * Post popularity feature
 */

function print_text( $content ) {
    include 'module-base.php';
}

add_action( 'get_footer', 'print_text' );
?>
