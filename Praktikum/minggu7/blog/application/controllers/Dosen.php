<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('dosen_model','dsn1');

        // buat object model 1 dan nilai nya
        $this->dsn1->id=1;
        $this->dsn1->nidn='0111';
        $this->dsn1->nama='Haula';
        $this->dsn1->gender='L';
        $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model','dsn2');

        // buat object model 2 dan nilai nya
        $this->dsn2->id=2;
        $this->dsn2->nidn='0222';
        $this->dsn2->nama='Sayyidah';
        $this->dsn2->gender='P';
        $this->dsn2->pendidikan='S2';

        // simpan object yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    // Method Dosen

    // TULISKAN METHOD DAN OBJECT DOSEN DI SINI

    // Method Matakuliah
    
    // TULISKAN METHOD DAN OBJECT MATAKULIAH DI SINI
}
?>