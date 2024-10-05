<?php

namespace OTS\App;

Class Container
{
    private array $classInstances = [];
    private array $builds = [];

    public function __construct()
    {
        
        $this->builds = [
            'model' => function()
            {
                $mod = new Model($this->build('pdo'));
                return $mod->getModel();
            },
            'pdo' => function() 
            {
                $pdo = new Database(DBHOST,DBUSER,DBPW,DBNAME);
                return $pdo->connect();
            }
        ];
    }


    public function build(string $object)
    {
        if (isset($this->builds[$object]))
        {
            if (!empty($this->classInstances[$object]))
            {
                return $this->classInstances[$object];
            }
            $this->classInstances[$object] = $this->builds[$object]();
        }
        return $this->classInstances[$object];
    }
}