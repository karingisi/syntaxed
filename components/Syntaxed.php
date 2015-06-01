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
            'description' => 'Highlights Code when added on the page'
        ];
    }

    //No properties to define on the component form
    public function defineProperties()
    {
        return [];
    }

    //Initial run event.
    public function onRun()
    {
        //add css and JS
        $this->addCss('/plugins/matiku/syntaxed/assets/css/prism.css');
        $this->addJs('/plugins/matiku/syntaxed/assets/js/prism.js');  
    }
}