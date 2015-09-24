<?php
namespace App\Controller;

/*use App\Lib\Utils;
use Cake\Event\Event;
use Cake\Utility\Inflector;*/

class ElementController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->layout(false);
        parent::initialize();
    }

    /*public function dashboard()
    {
        $this->viewBuilder()->layout(false);
        $this->render('/Element/dashboard');
    }

    public function app()
    {
        $this->viewBuilder()->layout(false);
        $this->render('/Element/app');
    }
    
    public function header()
    {
        $this->viewBuilder()->layout(false);
        $this->render('/Element/app');
    }    */
    public function html($element)
    {
        $defaultElement = ['dashboard', 'app', 'header', 'nav', 'rightbar'];
        if (in_array($element, $defaultElement)) {
            $this->render("/Element/$element");
        }
    }
}
