<?php
namespace App\Controller;

/*use App\Lib\Utils;
use Cake\Event\Event;
use Cake\Utility\Inflector;*/

class ViewsController extends AppController
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
    public function tmpl($element, $page = NULL)
    {
        $element = str_replace('.html', '', $element);
        $page = str_replace('.html', '', $page);
        $defaultElements = ['dashboard', 'app', 'header', 'nav', 'rightbar'];
        $defaultPages = ['login', 'signup', 'forgotpass'];
        
        if (!$page && in_array($element, $defaultElements)) {
            $this->render("/Element/$element");
        } elseif($page && in_array($page, $defaultPages)) {
            
            //$this->render("/Pages/$page");
            $this->render("/Users/$page");
        }
    }
}
