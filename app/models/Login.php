<?php

namespace app\models;

use Flight;

class Login {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
   
    public function login(){
        $stmt = $this->db->prepare("SELECT * FROM habitat_utilisateurs");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    

  
}