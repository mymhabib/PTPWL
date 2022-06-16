<?php
class Proyek extends Controller
{

    public function index()
    {

        if (isset($_SESSION['ptpwl_user_id'])) {
            $data['judul'] = 'Daftar Proyek';
            $data['proyek'] = $this->model('Proyek_model')->getAllProyek();
            $this->view('templates/header', $data);
            $this->view('proyek/index', $data);
            $this->view('templates/footer');
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
    public function detail($id)
    {
        if (isset($_SESSION['ptpwl_user_id'])) {
            $data['judul'] = 'Detail Proyek';
            $data['proyek'] = $this->model('Proyek_model')->getProyekById($id);
            $this->view('templates/header', $data);
            $this->view('proyek/detail', $data);
            $this->view('templates/footer');
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
    public function tambah()
    {
        if (isset($_SESSION['ptpwl_user_id'])) {
            if ($this->model('Proyek_model')->tambahDataProyek($_POST) > 0) {
                Flasher::setFlash('berhasil', ' ditambahkan', 'success');
                header('Location:' . BASEURL . 'proyek');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . 'proyek');
                exit;
            }
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
    public function hapus($id)
    {
        if (isset($_SESSION['ptpwl_user_id'])) {
            if ($this->model('proyek_model')->hapusDataProyek($id) > 0) {
                Flasher::setFlash('berhasil', ' dihapus', 'success');
                header('Location:' . BASEURL . 'proyek');
                exit;
            } else {
                Flasher::setFlash('gagal', ' dihapus', 'danger');
                header('Location:' . BASEURL . 'proyek');
                exit;
            }
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('Proyek_model')->getProyekById($_POST['id']), true);
    }

    public function ubah()
    {
        if (isset($_SESSION['ptpwl_user_id'])) {
            if ($this->model('Proyek_model')->ubahDataProyek($_POST) > 0) {
                Flasher::setFlash('berhasil', ' diubah', 'success');
                header('Location:' . BASEURL . 'proyek/detail/' . $_POST['id']);
                exit;
            } else {
                Flasher::setFlash('gagal', ' diubah', 'danger');
                header('Location:' . BASEURL . 'proyek/detail/' . $_POST['id']);
                exit;
            }
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
    public function cari()
    {
        if (isset($_SESSION['ptpwl_user_id'])) {
            $data['judul'] = 'Daftar Proyek';
            $data['proyek'] = $this->model('Proyek_model')->cariDataProyek();
            $this->view('templates/header', $data);
            $this->view('proyek/index', $data);
            $this->view('templates/footer');
        } else {
            header('location:' . BASEURL . 'login');
        }
    }
}
