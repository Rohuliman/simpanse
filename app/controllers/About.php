<?php


class About extends Controller {
    public function index($nama = 'rohul', $pekerjaan = 'iman', $umur = '20')
    {
        $data ['nama'] = $nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['umur'] = $umur;
        $data ['judul']= 'About me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');

    }
    
    public function page()
    {
        $data['judul'] = 'page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');

   }
}
