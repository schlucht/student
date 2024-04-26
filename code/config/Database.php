<?php

class Database {

    public function __construct() {      
    
        $this->dbhost = 'database'; //https://probable-succotash-5vrw4555495hpxvw-3306.app.github.dev/';
        $this->dbport = 3306;
        $this->dbname = 'Verwaltung';
        $this->dbUser = 'root';
        $this->dbPassword = 'schlucht';
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