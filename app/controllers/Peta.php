<?php

class Peta extends Controller {
    public function index()
    {
        $data['judul']= 'home';
        $this->view('template/header', $data);
        $this->view('peta/index');
        $this->view('template/footer');
    }
}