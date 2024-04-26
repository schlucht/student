<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Sirius\Validation\Validator;

$validator = new Validator();


require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/config.php';
include __DIR__ . '/controller/Lager.php';


// Twig
$router = new AltoRouter();

$loader = new FilesystemLoader(__DIR__ . "/views");
$twig = new Environment($loader);
require_once __DIR__ . '/router/routes.php';

$globalTemplateArray = array(
    'basedir' => '../',    
    'LMHLagerAdd' => $router->generate('lager-add'),
    'LMHLagerSave' => $router->generate('lager-save'),
    'LMHLagerEdit' => $router->generate('lager-edit'),
    'LMHLagerDelete' => $router->generate('lager-delete'),
);


$match = $router->match();
// dd($match, false);
if ($match) { 
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();
    call_user_func_array([$obj, $action], [$match]);
    // require $match['target'];
} else {   
    require '404.html';    
}



