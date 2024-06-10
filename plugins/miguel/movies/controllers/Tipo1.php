<?php namespace Miguel\Movies\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Tipo1 extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Miguel.Movies', 'main-menu-item', 'side-menu-tipo');
    }

}
