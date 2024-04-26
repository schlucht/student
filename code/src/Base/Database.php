<?php

namespace Ots\Base;

class Database {

    public function __construct() {      
    
        $this->dbhost = DBHOST;
        $this->dbport = DBPORT;
        $this->dbname = DBNAME;
        $this->dbUser = DBUSER;
        $this->dbPassword = DBPWD;
        
    }

    public function connect() {
        try {
            return \ParagonIE\EasyDB\Factory::create(
                'mysql:host=' . $this->dbhost .';port=' . $this->dbport .';dbname=' . $this->dbname, $this->dbUser, $this->dbPassword
            );
        } catch(Exeption $e) {
            dd($e->getMessage());
        }
    }

}