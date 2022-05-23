<?php
class Home extends controller
{
    public function index()
    {
        header('location:' . BASEURL . 'home/v1');
    }
    public function v1()
    {
        if (isset($_SESSION['ptpwl_user_id'])) {
            $data['judul'] = 'PT. Purna Wahana Lestari';
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
            
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
}
