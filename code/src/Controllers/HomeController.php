<?php
namespace Ots\Controllers;

use \Ots\Base\{ Controller, F };


class HomeController extends Controller
{
    public function __construct() {
        parent::__construct();        
    }

    function action($request) 
    {  
        $this->render('Home', array('title' => 'Startseite'));
    }

}