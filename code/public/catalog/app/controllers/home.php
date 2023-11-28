<?php
class Home {
    public function __construct() {
        echo "Home Controller";
    }

    public function index($data) {
        show($data);
        if(!isset($data)) return;
        
        show($data[1]);
    }
}