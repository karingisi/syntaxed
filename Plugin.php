<?php namespace Matiku\Syntaxed;

use System\Classes\PluginBase;

/**
 * Syntaxed Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Syntaxed',
            'description' => 'Code highlighting on the browser using PrismJS',
            'author'      => 'Silvanus Matiku',
            'icon'        => 'icon-leaf'
        ];
    }

    //Register component
    public function registerComponents()
    {
        return [
            'Matiku\Syntaxed\Components\Syntaxed' => 'syntaxed',
        ];
    }
}