<?php



namespace Ots\Routes;

use Ots\Router\Router;

class LagerRoutes
{    
    public static function createRoutes()
    {
        return array(            
            array('GET', '/lager', "\Ots\Controllers\LagerController#action", 'lager'),
        );        
    }

}