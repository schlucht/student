<?php

    $params = array(
        'title' => 'Lagerverwaltung -- Startseite',
        'name' => 'Lothar',
    );
    
    $params = array_merge($globalTemplateArray, $params);
    $template = $twig->load('home.twig');
    echo $template->render($params);