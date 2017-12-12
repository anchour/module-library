<?php

namespace Anchour\ModuleLibrary;

class Template
{
    /**
     * Include our template within our module-base.php template.
     *
     * @return void
     */
    public static function get($name)
    {
        $layout = str_replace('_', '-', get_row_layout());

        $overrides = static::templateOverrides();

        // Our default path;
        $template_path = AML_TEMPLATES_PATH . $layout . '.php';

        // Loop through each of our templates and check whether or not the
        // provided template exists. If it does, set our new $template_path
        // variable and break out of the loop early.
        foreach ($overrides as $override_path) {
            $new_path = $override_path . $layout . '.php';

            if (file_exists($override_path . $layout . '.php')) {
                $template_path = $new_path;
                break;
            }
        }

        include $template_path;
    }

    /**
     * Get an array of our template overrides, so we add locations
     * where our templates can be loaded from.
     *
     * @return array
     */
    private static function templateOverrides()
    {
        // Any custom locations that we want to load templates from.
        // Potentially useful for custom plugins in the future.
        $paths = apply_filters('AML/ModuleTemplateLocations', []);

        // A "default" path for the theme; this defaults
        // to the defined root of the theme.
        $paths[] = get_stylesheet_directory() . '/modules/';

        // Our default path to our template in the plugin.
        $paths[] = AML_TEMPLATES_PATH;

        return $paths;
    }
}
