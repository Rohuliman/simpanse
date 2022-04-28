<?php

class Home_model {
 namespace App/models
    
    use Exceptipon;
use app/core;
use app/ccore/database;

    private $table = 'sla';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
     
   public function getAllHome()
   {
     $this->db->query(' SELECT * FROM ' .$this->table);
     return $this->db->resultSet();
   }

   public function tambah($data)
    {
        $query = "INSERT INTO sla VALUES(null, :tanggal, :sensor, :jumlah, :nilai, :anggaran, :totall, :nilais)";
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('sensor', $data['sensor']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('nilai', $data);
        $this->db->bind('anggaran', $data['anggaran']);
        $this->db->bind('totall', $data['totall']);
        $this->db->bind('nilais', $data);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM sla;");
        return $this->db->resultSet();
    }

}
