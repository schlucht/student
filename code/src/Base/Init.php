<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/Config.php';

use Ots\Base\F;
use Ots\Routes\Router;
use Ots\Routes\HomeRoutes;
use Ots\Routes\LagerRoutes;


$router = new Router();

$router->addRoutes(HomeRoutes::createRoutes());
$router->addRoutes(LagerRoutes::createRoutes());

$router->run();



