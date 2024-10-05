<?php

use OTS\App\Container;

require('Helpers/autoloader.php');
require('Helpers/functions.php');
require('config.php');

$container = new Container();
$mod = $container->build('model');

$mod->all();