<?php
namespace app/Controller
    
    use app/core;
use app/model;
use app/config;

class Peta extends core/Controller {
    public function index()
    {
        $data['judul']= 'home';
        $this->view('template/header', $data);
        $this->view('peta/index');
        $this->view('template/footer');
    }
}
