<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// 

$router->map('GET', '/', 'Lager#action', 'home');
//$router->map('GET', '/', 'controller/home.php', 'home');
$router->map('GET', '/lager', 'controller/lager.php', 'lager-anzeigen');
$router->map('GET', '/lager/add', 'controller/lager.php', 'lager-add');
$router->map('GET', '/lager/edit/[i:id]', 'controller/lager.php', 'lager-edit');
$router->map('GET', '/lager/delete/[i:id]', 'controller/lager.php', 'lager-delete');
$router->map('POST', '/lager/save', 'controller/lager.php', 'lager-save');
