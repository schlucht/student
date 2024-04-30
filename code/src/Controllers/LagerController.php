<?php 

namespace Ots\Controllers;

use Ots\Base\Database;
use Ots\Base\Controller;
use Ots\Base\F;
class LagerController extends Controller
{

    function action($request) 
    {        
        if ($request['name'] == 'lager'){
            $this->home();
        }
    }

    function home() 
    {
        $database = new Database();
        $db = $database->connect();

        $lager = $db->run('SELECT * from LGR_Lager');    
        
        $data = array (
            'title' => 'Lagerverwaltung und Morgen',
            'lager' => $lager
        );

        

        $this->render('Lager', $data);
    }
}