<?php

namespace EverydayBreakdance;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EverydayBreakdance\\SiteTitle",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SiteTitle extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg aria-hidden="true" focusable="false" role="img" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m256 0.5c-140.88 0-255.5 114.61-255.5 255.49 0 140.88 114.62 255.51 255.5 255.51 140.88 0 255.5-114.63 255.5-255.51 0-140.88-114.62-255.49-255.5-255.49zm-229.71 255.49c0-33.306 7.145-64.923 19.89-93.488l109.58 300.22c-76.642-37.227-129.47-115.82-129.47-206.74zm229.71 229.73c-22.547 0-44.309-3.307-64.898-9.361l68.932-200.27 70.604 193.45c0.466 1.135 1.035 2.179 1.646 3.165-23.878 8.404-49.536 13.024-76.284 13.024zm31.659-337.44c13.827-0.724 26.29-2.179 26.29-2.179 12.376-1.464 10.916-19.658-1.468-18.93 0 0-37.207 2.919-61.23 2.919-22.568 0-60.494-2.919-60.494-2.919-12.388-0.728-13.839 18.198-1.456 18.93 0 0 11.715 1.455 24.095 2.179l35.784 98.063-50.277 150.77-83.649-248.83c13.84-0.724 26.286-2.179 26.286-2.179 12.372-1.464 10.912-19.658-1.468-18.93 0 0-37.198 2.919-61.222 2.919-4.309 0-9.386-0.108-14.784-0.283 41.075-62.356 111.68-103.54 191.93-103.54 59.8 0 114.25 22.868 155.12 60.315-0.989-0.058-1.958-0.183-2.978-0.183-22.563 0-38.574 19.653-38.574 40.771 0 18.93 10.92 34.948 22.564 53.874 8.737 15.299 18.938 34.953 18.938 63.355 0 19.657-7.56 42.475-17.479 74.259l-22.917 76.554-83.016-246.93zm83.827 306.26 70.163-202.86c13.104-32.77 17.47-58.977 17.47-82.272 0-8.458-0.558-16.31-1.547-23.625 17.932 32.715 28.137 70.262 28.137 110.2 0 84.746-45.927 158.74-114.22 198.55z"></path></svg>';
    }

    static function tag()
    {
        return 'h3';
    }

    static function tagOptions()
    {
        return ['h2', 'h3', 'h4', 'h5', 'h6', 'h1', 'p', 'span', 'div'];
    }

    static function tagControlPath()
    {
        return "content.settings.tag";
    }

    static function name()
    {
        return 'Site Title';
    }

    static function className()
    {
        return 'evr-bde-site-title';
    }

    static function category()
    {
        return 'everyday_breakdance';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "size",
        "Size",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 300, 'max' => 1200, 'step' => 1], 'unitOptions' => ['types' => [], 'defaultType' => 'px']],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "settings",
        "Settings",
        [c(
        "tag",
        "Tag",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'h1', 'text' => 'h1'], '1' => ['text' => 'h2', 'value' => 'h2'], '2' => ['text' => 'h3', 'value' => 'h3'], '3' => ['text' => 'h4', 'value' => 'h4'], '4' => ['text' => 'h5', 'value' => 'h5'], '5' => ['text' => 'h6', 'value' => 'h6'], '6' => ['text' => 'p', 'value' => 'p'], '7' => ['text' => 'span', 'value' => 'span'], '8' => ['text' => 'div', 'value' => 'div']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '2' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '3' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '5' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return ['content.settings'];
    }
}
