<?php 

class Lager {
    static function action($request) {
        $I = new Lager();
        if ($request['name'] == 'home'){
            $I->home();
        }
    }

    function home() {
        $database = new Database();
        $db = $database->connect();
        
        $lager = $db->run('SELECT * from LGR_Lager');    
        $data = array (
            'title' => 'Lagerverwaltung',
            'lager' => $lager
        );
        
        include __DIR__ . '/../views/lager.php';
    }
}