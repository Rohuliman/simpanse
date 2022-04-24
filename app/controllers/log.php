<?php

class log extends Controller {
    public function index()
    {

        $data['judul']= 'login';
        $this->view('login/index');
        
    }

     public function login()
     {
         $username = $_POST ['username'];
         $password = $_POST ['password'];
         $data ['login'] = $this->model('Log_model')->getUser($username, $password);
         session_start();
         if ($data['login']==NULL)
         {
             header("location:". BASEURL.'404');
         } else 
         {
           foreach ($data['login'] as $row);
           $_SESSION['nama']= $row['login'];
           header("location:".BASEURL);
          
         }

     }

    }