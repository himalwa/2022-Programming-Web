<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis_wisata extends CI_Controller {
        public function index(){
            $this->load->model('jenis_wisata_model');
            $jenis_wisata = $this->jenis_wisata_model->getAll();
            $data['jenis_wisata'] = $jenis_wisata;
            //render data dan kirim data kedalam view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/index', $data);
            $this->load->view('layout/footer');
            }
        // public function detail($id){
        //     // akses model mahasiswa
        //     $this->load->model('jenis_wisata_model');
        //     $siswa = $this->jenis_wisata_model->getById($id);
        //     $data['siswa'] = $siswa;
        //     //render data dan kirim data kedalam view
        //     $this->load->view('layout/header');
        //     $this->load->view('jenis_wisata/detail', $data);
        //     $this->load->view('layout/footer');
        // }
        public function form(){
            // rendr view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/form');
            $this->load->view('layout/footer');
        }
        public function save(){
            // akses ke model jenis_wisata
            $this->load->model('jenis_wisata_model', 'jenis_wisata');          // 1
            // $_id = $this->input->post('id');
            $_nama = $this->input->post('nama');
    
            // $data_jenis_wisata['id'] = $_id;     // 2
            $data_jenis_wisata['nama'] = $_nama;
    
            if((!empty($_idedit))){         // update
                $data_jenis_wisata['id'] = $_idedit;
                $this->jenis_wisata->update($data_jenis_wisata);
            }else{
                // data baru
                $this->jenis_wisata->simpan($data_jenis_wisata);
            }
            redirect('jenis_wisata', 'refresh');
        }
        public function edit($id){
            // akses midel jenis_wisata
            $this->load->model('jenis_wisata_model', 'jenis_wisata');
            $obj_jenis_wisata = $this->jenis_wisata->getById($id);
            $data['obj_jenis_wisata'] = $obj_jenis_wisata;
            //render data dan kirim data kedalam view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis_wisata/edit', $data);
            $this->load->view('layout/footer'); 
        }
        public function delete($id){
            // akses midel jenis_wisata
            $this->load->model('jenis_wisata_model', 'jenis_wisata');
            // mengecek data jenis_wisata berdasarkan id
            $data_jenis_wisata['id'] = $id;
            $this->jenis_wisata->delete($data_jenis_wisata);
            redirect('jenis_wisata', 'refresh');
        }
        // public function __construct()
        // {
        //     parent::__construct();
        //     if (!$this->session->userdata('logged_in')) {
        //         redirect('/login');
        //     }
        // }
        // public function upload(){
        //     $_idjenis_wisata=$this->input->post("idjenis_wisata");
        //     $this->load->model('jenis_wisata_model', 'jenis_wisata');
        //     $siswa = $this->jenis_wisata->getById($_idjenis_wisata);
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
        //     $this->load->view('jenis_wisata/detail', $data);
        //     $this->load->view('layout/footer');
    
            
        // }
}
?>