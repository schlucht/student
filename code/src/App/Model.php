<?php

namespace OTS\App;

use PDO;

class Model
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getModel()
    {
        return $this;
    }

    public function all()
    {
        $sql = "SELECT * FROM `users`";
        $res = $this->pdo->query($sql);
        foreach($res AS $user)
        {
            echo "<p>" . $user['username'] . "</p>";
        }
    }
}