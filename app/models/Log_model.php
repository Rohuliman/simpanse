<?php

class Log_model
{
     private $db;

     public function __construct()
    {
    $this->db = new Database;
    }
    
    public function getLogin($username, $password) 
    {
        $this->db-> query("SELECT*FROM  WHERE username = :username, password= :password");
        $this->db-> bind('username', $username);
        $this->db-> bind('password', $password);
        return $this->db->resultSet();

    }
    
}
