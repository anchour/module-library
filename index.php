<?php
/**
 * Plugin Name: Anchour Module Library
 * Description: Pre-packaged modules for flexible-content fields.
 * Version: 0.1
 * License: none
 */

$aml_path = plugin_dir_path(__FILE__);
$partial_path = $aml_path . 'module-templates/partials/';

include 'src/setup.php';
include 'src/filters.php';

function includeModules() {
    include 'module-base.php';
}

add_action( 'get_footer', 'includeModules' );
?>
