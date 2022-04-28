<?php
namespace app/Controller
    
    use app/core;
use app/model;
use app/config;
    
class Home extends Controller {
    public function index()
    {
        $data['judul']= 'Home';
        $data['sla']= $this->model('Home_model')->getAllHome();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }

        public function tambah()
    {
        if ($this->model('Home_model')->tambah($_POST) > 0 ) {
            header('Location:'.BASEURL.'/home');
            exit;
        }
    }
    
}
