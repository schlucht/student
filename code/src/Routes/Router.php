<?php

namespace Ots\Routes;

use \Ots\Base\F;
use AltoRouter;

class Router {
    public function __construct(){
        $this->router = new AltoRouter();
    }

    public function addRoutes($routesArray) {        
        $this->router->addRoutes($routesArray);        
    }

    public function run() {
        $match = $this->router->match();
        if ($match) { 
            list($controller, $action) = explode('#', $match['target']);
            $obj = new $controller();
            call_user_func_array([$obj, $action], [$match]);    
        } else {   
            $data = array("title" => "404 --- page not found...");
            $data = array_merge(PAGEDATA, $data);
            require __DIR__ . '/../Views/404.php';    
        }
    }
}