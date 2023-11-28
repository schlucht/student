<?php

Class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    private $path = '../app/controllers/'; 

    public function __construct() {
        $url= $this->splitURL();
        $this->controller = isset($url[0]) ? $url[0] : $this->controller;
        unset($url[0]);
        $this->method = isset($url[1]) ? $url[1] : $this->method;
        unset($url[1]);
        $this->params = array_values($url);
        
       $this->createController($this->controller); 
       $this->createMethod($this->method, $this->params);
    }

    private function splitURL() {
        if (isset($_GET['url']))
            return explode("/", filter_var(trim($_GET['url'],"/"), FILTER_SANITIZE_URL));
    }

    private function createController(string $url) {
        $this->controller = strtolower($url);
        
        $filename = $this->path . $this->controller . '.php';
        $this->controller = ucfirst($this->controller);
        if(file_exists($filename)){
            require $filename;
            $this->controller = new $this->controller;
        } else {
            require $this->path . "_404.php";
        }
    }

    private function createMethod(string $method, array $data) {
        if(method_exists($this->controller, $method)) {
            call_user_func_array([$this->controller, $method], [$data]); 
        }
    }

}