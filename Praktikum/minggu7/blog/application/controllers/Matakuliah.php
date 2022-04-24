<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('matakuliah_model','mtk1');

        // buat object model 1 dan nilai nya
        $this->mtk1->id=1;
        $this->mtk1->nama='Basis Data';
        $this->mtk1->sks='3';
        $this->mtk1->kode='101';

        $this->load->model('matakuliah_model','mtk2');

        // buat object model 2 dan nilai nya
        $this->mtk2->id=2;
        $this->mtk2->nama='Pemrograman Web';
        $this->mtk2->sks='4';
        $this->mtk2->kode='102';

        // simpan object yang kita buat tadi ke dalam array
        $list_mtk = [$this->mtk1, $this->mtk2];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_mtk'] = $list_mtk;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    // Method Dosen

    // TULISKAN METHOD DAN OBJECT DOSEN DI SINI

    // Method Matakuliah
    
    // TULISKAN METHOD DAN OBJECT MATAKULIAH DI SINI
}
?>