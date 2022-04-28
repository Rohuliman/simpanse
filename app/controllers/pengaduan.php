<?php
namespace app/Controller
    
    use app/core;
use app/model;
use app/config;

class pengaduan extends core/Controller {
    public function index()
    {

        $data['judul']= 'home';
        $this->view('template/header');
        $this->view('pengaduan/index');
        $this->view('template/footer');
        
    }
}
