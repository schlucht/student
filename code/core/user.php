<?php

class User {
    private $conn;
    private $table = 'users';

    public $userid;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $created_at;
    public $updated_at;

    public function __construct($db) {        
        $this->conn = $db;
    }

    public function getAllUsers() {
        $query = "SELECT * FROM $this->table";
        
        $stmt = $this->conn->prepare($query);
       $stmt->execute();
       return $stmt;
    }

    public function getUser($userid) {
        $query = "SELECT * FROM $this->table WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':userid', $userid);
        $stmt->execute();
        return $stmt;    
    }

    public function create($user) {
        $query = "INSERT INTO $this->table (firstname, lastname, email, password, updated_at) VALUES (:firstname, :lastname, :email, :password, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':firstname', $user->firstname);
        $stmt->bindValue(':lastname', $user->lastname);
        $stmt->bindValue(':email', $user->email);
        $stmt->bindValue(':password', $user->password);
        $stmt->execute();
        return $stmt;   
    }
}