<?php

namespace Ots\Routes;

use Ots\Router\Router;

class HomeRoutes
{    
  
    public static function createRoutes()   
    {       
            return array(
                array('GET', '/', "\Ots\Controllers\HomeController#action", 'home')
            );  
    }

   
}