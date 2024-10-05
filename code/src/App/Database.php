<?php

namespace OTS\App;
use PDO;
use Exception;

Class Database
{
    private string $host;
    private string $dbname;
    private string $dbuser;
    private string $dbpass;



    public function __construct(string $host, string $dbuser, string $dbpass, string $dbname)
    {
        $this->host = $host;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;
    }

    public function connect(): PDO
    {
        $pdo_string = "mysql:host=$this->host;port=3306;dbname=$this->dbname";
  
        try
        {
            $pdo = new PDO($pdo_string, $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        }
        catch(Exception $e)
        {
            echo "DB konnte nicht geladen werden!<br><hr>" . $e;
        }
    }
}