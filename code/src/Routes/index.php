<?php

use \Ots\Base\F;

$router = new AltoRouter();

include_once 'HomeRoutes.php';
include_once 'LagerRoutes.php';

$match = $router->match();

if ($match) { 
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();
    call_user_func_array([$obj, $action], [$match]);    
} else {   
    $data = array("title" => "404 --- page not found...");
    $data = array_merge(PAGEDATA, $data);
    require __DIR__ . '/../Views/404.php';    
}