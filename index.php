<?php

namespace Anchour\ModuleLibrary;

/**
 * Plugin Name: Anchour Module Library
 * Description: Pre-packaged modules for flexible-content fields.
 * Version: 0.1
 * License: none
 */

$aml_path = plugin_dir_path(__FILE__);
$partial_path = $aml_path . 'module-templates/partials/';

require __DIR__ . '/vendor/autoload.php';

/**
 * The base module wrapper that goes around every type of module
 * within this plugin.
 *
 * @return void
 */
function includeModules()
{
    include 'module-base.php';
}

add_action('get_footer', __NAMESPACE__ . '\\includeModules');
