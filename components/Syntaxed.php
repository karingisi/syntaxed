<?php namespace Matiku\Syntaxed\Components;

use Cms\Classes\ComponentBase;

//Syntaxed Component Class
class Syntaxed extends ComponentBase
{
    //Define component name and description
    public function componentDetails()
    {
        return [
            'name'        => 'Syntaxed Component',
            'description' => 'Highlights Code when added on the page using PrismJS'
        ];
    }

    //No properties to define on the component form
    public function defineProperties()
    {
        return [
             'theme' => [
                'description' => 'Theme',
                'title'       => 'Theme',
                'default'     => 'default',
                'type'        => 'dropdown',
                'options'     => ['default'=>'Default','dark'=>'Dark','funky'=>'Funky','okaidia'=>'Okaidia','twilight'=>'Twilight','coy'=>'Coy']
            ]
        ];
    }

    //Initial run event.
    public function onRun()
    {
        //add css depending on theme selected
        $theme = $this->property('theme');

        switch ($theme) {
            case "dark":
                $this->addCss('/plugins/matiku/syntaxed/assets/css/prism_dark.css');
                break;

            case "funky":
                $this->addCss('/plugins/matiku/syntaxed/assets/css/prism_funky.css'); 
                break;

            case "okaidia":
                $this->addCss('/plugins/matiku/syntaxed/assets/css/prism_okaidia.css'); 
                break;

            case "twilight":
                $this->addCss('/plugins/matiku/syntaxed/assets/css/prism_twilight.css'); 
                break;  

            case "coy":
                $this->addCss('/plugins/matiku/syntaxed/assets/css/prism_coy.css'); 
                break;  

            default:
                $this->addCss('/plugins/matiku/syntaxed/assets/css/prism.css'); 
        }
        //Add JS
        $this->addJs('/plugins/matiku/syntaxed/assets/js/prism.js');
    }
}