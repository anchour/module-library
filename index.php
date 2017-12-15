<?php

namespace Anchour\ModuleLibrary;

/**
 * Plugin Name: Anchour Module Library
 * Description: Pre-packaged modules for flexible-content fields.
 * Version: 0.1
 * License: none
 */

$aml_path = plugin_dir_path(__FILE__);
$templates_path = $aml_path . 'module-templates/';
$partial_path = $templates_path . 'partials/';

define('AML_PLUGIN_ROOT', $aml_path);
define('AML_TEMPLATES_PATH', $templates_path);
define('AML_PARTIALS_PATH', $partial_path);

require __DIR__ . '/vendor/autoload.php';

/**
 * The base module wrapper that goes around every type of module
 * within this plugin.
 *
 * @return void
 */
function module_base()
{
    include __DIR__ . '/module-base.php';
}

add_action('get_footer', __NAMESPACE__ . '\\module_base');
