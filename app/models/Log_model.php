<?php
namespace App/models
     use Exception;
use App/models;
     use app/core/database;
class Log_model
{
     private $db;
     private $table='users';

     public function __construct()
    {
    $this->db = new Database;
    }
    
    public function getLogin($username, $password) 
    {
        $this->db->query("SELECT * FROM users WHERE username =:username, password =:password" );
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        return $this->db->resultSet();
 
    }
    
}
