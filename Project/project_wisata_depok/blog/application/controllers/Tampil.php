<?php
class Tampil extends CI_Controller{
    public function jenis_wisata(){
        // akses model jeniswisata
        $this->load->model('jeniswisata_model');
        $jeniswisata = $this->jeniswisata_model->getAll();
        $data['jeniswisata'] = $jeniswisata;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('jeniswisata/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function kecamatan(){
        // akses model kecamatan
        $this->load->model('kecamatan_model');
        $kecamatan = $this->kecamatan_model->getAll();
        $data['kecamatan'] = $kecamatan;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('kecamatan/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function komentar(){
        // akses model komentar
        $this->load->model('komentar_model');
        $komentar = $this->komentar_model->getAll();
        $data['komentar'] = $komentar;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('komentar/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function nilairating(){
        // akses model nilairating
        $this->load->model('nilairating_model');
        $nilairating = $this->nilairating_model->getAll();
        $data['nilairating'] = $nilairating;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('nilairating/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function tempatwisata(){
        // akses model tempatwisata
        $this->load->model('tempatwisata_model');
        $tempatwisata = $this->tempatwisata_model->getAll();
        $data['tempatwisata'] = $tempatwisata;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('tempatwisata/tampil', $data);
        $this->load->view('layouts/footer');
    }
}