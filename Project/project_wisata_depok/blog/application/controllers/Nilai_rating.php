<?php
class Nilai_rating extends CI_Controller {
    public function index(){
        $this->load->model('nilai_rating_model');
        $nilai_rating = $this->nilai_rating_model->getAll();
        $data['nilai_rating'] = $nilai_rating;
        //render data dan kirim data kedalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/index', $data);
        $this->load->view('layout/footer');
        }
    // public function detail($id){
    //     // akses model mahasiswa
    //     $this->load->model('nilai_rating_model');
    //     $siswa = $this->nilai_rating_model->getById($id);
    //     $data['siswa'] = $siswa;
    //     //render data dan kirim data kedalam view
    //     $this->load->view('layout/header');
    //     $this->load->view('nilai_rating/detail', $data);
    //     $this->load->view('layout/footer');
    // }
    public function form(){
        // rendr view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model nilai_rating
        $this->load->model('nilai_rating_model', 'nilai_rating');          // 1
        // $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');

        // $data_nilai_rating['id'] = $_id;     // 2
        $data_nilai_rating['nama'] = $_nama;

        if((!empty($_idedit))){         // update
            $data_nilai_rating['id'] = $_idedit;
            $this->nilai_rating->update($data_nilai_rating);
        }else{
            // data baru
            $this->nilai_rating->simpan($data_nilai_rating);
        }
        redirect('nilai_rating', 'refresh');
    }
    public function edit($id){
        // akses midel nilai_rating
        $this->load->model('nilai_rating_model', 'nilai_rating');
        $obj_nilai_rating = $this->nilai_rating->getById($id);
        $data['obj_nilai_rating'] = $obj_nilai_rating;
        //render data dan kirim data kedalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/edit', $data);
        $this->load->view('layout/footer'); 
    }
    public function delete($id){
        // akses midel nilai_rating
        $this->load->model('nilai_rating_model', 'nilai_rating');
        // mengecek data nilai_rating berdasarkan id
        $data_nilai_rating['id'] = $id;
        $this->nilai_rating->delete($data_nilai_rating);
        redirect('nilai_rating', 'refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect('/login');
    //     }
    // }
    // public function upload(){
    //     $_idnilai_rating=$this->input->post("idnilai_rating");
    //     $this->load->model('nilai_rating_model', 'nilai_rating');
    //     $siswa = $this->nilai_rating->getById($_idnilai_rating);
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
    //     $this->load->view('nilai_rating/detail', $data);
    //     $this->load->view('layout/footer');

        
    // }
}
?>