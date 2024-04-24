<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/functions.php';

$router = new AltoRouter();
// $router->setBasePath('/code');

$router->map('GET', '/', 'controller/home.php', 'home');

$match = $router->match();

var_dump($match);
if ($match) { 
    require $match['target'];
} else {   
    require '404.html';    
}