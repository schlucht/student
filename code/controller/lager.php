<?php

// if ($match['name'] == 'lager-anzeigen') {
    
//     $lager = $db->run('SELECT * from LGR_Lager');    
//     $params = array (
//         'title' => 'Lagerverwaltung',
//         'lager' => $lager
//     );

//     $params = array_merge($globalTemplateArray, $params);

//     // $template = $twig->load('lager.twig');
//     // echo $template->render($params);
//     $data = $lager;
//     include (__DIR__ . '/../views/lager.php');
// }

if ($match['name'] == 'lager-add'){
    $params = array (
        'title' => 'Neues Lager',        
    );

    $params = array_merge($globalTemplateArray, $params);

    $template = $twig->load('lager-add.twig');
    echo $template->render($params);
}

if ($match['name'] == 'lager-save'){

    $validator->add(
        array(
            'LGR_bezeichnung' => 'required',
            'LGR_anzahl' => 'required | integer',
        )
    );

    if ($validator->validate($_POST)) {
        if ( isset($_POST['LGR_id']) == 0 && $_POST['LGR_id'] != '') {
            $db->insert(
                'LGR_Lager',
                [
                    'LGR_bezeichnung' => $_POST['LGR_bezeichnung'],
                    'LGR_anzahl' => $_POST['LGR_anzahl']
                ],
            );
        } else {
            $db->update(
                'LGR_Lager',
                [
                    'LGR_bezeichnung' => $_POST['LGR_bezeichnung'],
                    'LGR_anzahl' => intval($_POST['LGR_anzahl']),
                ], [
                    'LGR_id' => $_POST['LGR_id']
                ]
            );
        }
        header('Location:'. $router->generate('lager-anzeigen'));
    } else {
        var_dump($validator->getMessages());
    }
    
}

if($match['name'] == 'lager-edit'){
    $id = $match['params']['id']; // dd($router);
    $lager = $db->row('SELECT * from LGR_Lager WHERE LGR_id = ?', $id);
    // dd($lager);
    $params = array (
        'title' => 'Lager bearbeiten',
        'lager' => $lager,        
    );
    
    $params = array_merge($globalTemplateArray, $params);
    $template = $twig->load('lager-add.twig');
    echo $template->render($params);
}

if($match['name'] == 'lager-delete'){
    $id = $match['params']['id']; // dd($router);

    $db->delete('LGR_Lager', 
    [
        'LGR_id' => $id,
    ]);
        
    header('Location:'. $router->generate('lager-anzeigen'));

}