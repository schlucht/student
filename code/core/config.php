<?php

$db_user = 'root';
$db_password = 'schlucht';
$db_name = 'home';
$db_host = 'database';

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',$db_user,$db_password);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);