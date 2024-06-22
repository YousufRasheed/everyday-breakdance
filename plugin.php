<?php

/**
 * Plugin Name: Everyday Breakdance
 * Description: Custom elements extending Breakdance Website Builder for everyday use.
 * Author: Yousuf Rasheed
 * Text Domain: everyday-breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace EverydayBreakdance;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    // Register a custom category
    \Breakdance\Elements\ElementCategoriesController::getInstance()->registerCategory('everyday_breakdance', 'Everyday Breakdance');

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'EverydayBreakdance;',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'EverydayBreakdance;',
        'macro',
        'Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'EverydayBreakdance;',
        'preset',
        'Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);