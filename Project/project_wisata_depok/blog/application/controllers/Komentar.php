<?php
class Komentar extends CI_Controller {
    public function index(){
    $this->load->model('komentar_model');
    $komentar = $this->komentar_model->getAll();
    $data['komentar'] = $komentar;
    //render data dan kirim data kedalam view
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('komentar/index', $data);
    $this->load->view('layout/footer');
    }
    // public function detail($id){
    //     // akses model mahasiswa
    //     $this->load->model('komentar_model');
    //     $siswa = $this->komentar_model->getById($id);
    //     $data['siswa'] = $siswa;
    //     //render data dan kirim data kedalam view
    //     $this->load->view('layout/header');
    //     $this->load->view('komentar/detail', $data);
    //     $this->load->view('layout/footer');
    // }
    public function form(){
        // rendr view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model komentar
        $this->load->model('komentar_model', 'komentar');          // 1
        // $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_isi = $this->input->post('gender');
        $_users_id = $this->input->post('users_id');
        $_wisata_id = $this->input->post('wisata_id');
        $_nilai_rating_id = $this->input->post('nilai_rating_id');

        // $data_komentar['id'] = $_id;     // 2
        $data_komentar['tanggal'] = $_tanggal;
        $data_komentar['isi'] = $_isi;
        $data_komentar['users_id'] = $_users_id;
        $data_komentar['wisata_id'] = $_wisata_id;
        $data_komentar['nilai_rating_id'] = $_nilai_rating_id;

        if((!empty($_idedit))){         // update
            $data_komentar['id'] = $_idedit;
            $this->komentar->update($data_komentar);
        }else{
            // data baru
            $this->komentar->simpan($data_komentar);
        }
        redirect('komentar', 'refresh');
    }
    public function edit($id){
        // akses midel komentar
        $this->load->model('komentar_model', 'komentar');
        $obj_komentar = $this->komentar->getById($id);
        $data['obj_komentar'] = $obj_komentar;
        //render data dan kirim data kedalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/edit', $data);
        $this->load->view('layout/footer'); 
    }
    public function delete($id){
        // akses midel komentar
        $this->load->model('komentar_model', 'komentar');
        // mengecek data komentar berdasarkan id
        $data_komentar['id'] = $id;
        $this->komentar->delete($data_komentar);
        redirect('komentar', 'refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect('/login');
    //     }
    // }
    // public function upload(){
    //     $_idkomentar=$this->input->post("idkomentar");
    //     $this->load->model('komentar_model', 'komentar');
    //     $siswa = $this->komentar->getById($_idkomentar);
    //     $data['siswa'] = $siswa;

    //     $config['upload_path'] = './upload/photos';
    //     $config['allowed_types'] = '|jpg|png';
    //     $config['max_sise'] = 2894;
    //     $config['max_width'] = 2894;
    //     $config['max_height'] = 2894;
    //     $config['file_name'] = $siswa->id;

    //     //menginisialisasi file upload
    //     $this->load->library('upload',$config);

    //     if (!$this->upload->do_upload('foto')) {
    //         $data['error'] = $this->upload->display_errors();
    //     } else {
    //         $data['error'] = 'data sukses';
    //         $data['upload_data'] = $this->upload->data();
    //     }
    //     // kirim dan render ke detail
    //     $this->load->view('layout/header');
    //     $this->load->view('komentar/detail', $data);
    //     $this->load->view('layout/footer');

        
    // }
}
?>