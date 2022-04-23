<?php
class Mahasiswa extends CI_Controller{
    public function index(){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');

        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        // render data dan kirim data ke view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        $this->load->model('mahasiswa_model');

        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        // merender view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }
    // method dosen
    // tulis disini method dan object
    
    // method matakuliah
    // tulis disini method dan object
}
?>