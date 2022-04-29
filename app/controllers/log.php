<?php

class log extends Controller {
    public function index()
    {

        $data['judul']= 'login';
        $this->view('login/index', $data);
       
    }
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $data['login'] = $this->model('Log_model')->getLogin($username, $password);
      
        session_start();
        if($data['login'] == null){
            header('Location :'.BASEURL."404");
        } else{
            foreach($data['login'] as $row):
                $_SESSION ['login'] = $row ['username'];
                header('Location :' .BASEURL);
            endforeach;
        }


    }
}
