<?php

namespace Ots\Base;

use Ots\Base\Database;
use Ots\Base\C;
use Ots\Base\F;

abstract class Controller 
{
    private $database;
    protected $db;
    protected $data;


    public function __construct() {
        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->data = PAGEDATA;
    }

    protected function render($view, $data = []) {
        $data = array_merge($this->data, $data);
        extract($data);       

        include __DIR__ . "/../Views/$view.php";
    }

    abstract function action($request);


}