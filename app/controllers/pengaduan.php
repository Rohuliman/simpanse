<?php

class pengaduan extends Controller {
    public function index()
    {

        $data['judul']= 'home';
        $this->view('template/header');
        $this->view('pengaduan/index');
        $this->view('template/footer');
        
    }
}