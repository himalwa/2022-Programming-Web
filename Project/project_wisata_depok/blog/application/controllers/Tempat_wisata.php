<?php
class Tempat_wisata extends CI_Controller {
        public function index(){
            $this->load->model('tempat_wisata_model');
            $tempat_wisata = $this->tempat_wisata_model->getAll();
            $data['tempat_wisata'] = $tempat_wisata;
            //render data dan kirim data kedalam view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('tempat_wisata/index', $data);
            $this->load->view('layout/footer');
        }
        // public function detail($id){
        //     // akses model mahasiswa
        //     $this->load->model('tempat_wisata_model');
        //     $siswa = $this->tempat_wisata_model->getById($id);
        //     $data['siswa'] = $siswa;
        //     //render data dan kirim data kedalam view
        //     $this->load->view('layout/header');
        //     $this->load->view('tempat_wisata/detail', $data);
        //     $this->load->view('layout/footer');
        // }
        public function form(){
            // rendr view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('tempat_wisata/form');
            $this->load->view('layout/footer');
        }
        public function save(){
            // akses ke model tempat_wisata
            $this->load->model('tempat_wisata_model', 'tempat_wisata');          // 1
            // $_id = $this->input->post('id');
            $_tanggal = $this->input->post('tanggal');
            $_isi = $this->input->post('gender');
            $_users_id = $this->input->post('users_id');
            $_wisata_id = $this->input->post('wisata_id');
            $_nilai_rating_id = $this->input->post('nilai_rating_id');
    
            // $data_tempat_wisata['id'] = $_id;     // 2
            $data_tempat_wisata['tanggal'] = $_tanggal;
            $data_tempat_wisata['isi'] = $_isi;
            $data_tempat_wisata['users_id'] = $_users_id;
            $data_tempat_wisata['wisata_id'] = $_wisata_id;
            $data_tempat_wisata['nilai_rating_id'] = $_nilai_rating_id;
    
            if((!empty($_idedit))){         // update
                $data_tempat_wisata['id'] = $_idedit;
                $this->tempat_wisata->update($data_tempat_wisata);
            }else{
                // data baru
                $this->tempat_wisata->simpan($data_tempat_wisata);
            }
            redirect('tempat_wisata', 'refresh');
        }
        public function edit($id){
            // akses midel tempat_wisata
            $this->load->model('tempat_wisata_model', 'tempat_wisata');
            $obj_tempat_wisata = $this->tempat_wisata->getById($id);
            $data['obj_tempat_wisata'] = $obj_tempat_wisata;
            //render data dan kirim data kedalam view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('tempat_wisata/edit', $data);
            $this->load->view('layout/footer'); 
        }
        public function delete($id){
            // akses midel tempat_wisata
            $this->load->model('tempat_wisata_model', 'tempat_wisata');
            // mengecek data tempat_wisata berdasarkan id
            $data_tempat_wisata['id'] = $id;
            $this->tempat_wisata->delete($data_tempat_wisata);
            redirect('tempat_wisata', 'refresh');
        }
        public function detail($id){
            // akses model tempat_wisata
            $this->load->model('tempat_wisata_model');
            $temp_wst = $this->tempat_wisata_model->getById($id);
            $data['temp_wst'] = $temp_wst;
            //render data dan kirim data kedalam view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('tempat_wisata/detail', $data);
            $this->load->view('layout/footer');
        // public function __construct()
        // {
        //     parent::__construct();
        //     if (!$this->session->userdata('logged_in')) {
        //         redirect('/login');
        //     }
        }
        public function upload(){
            $_idtempat_wisata=$this->input->post("idtempat_wisata");
            $this->load->model('tempat_wisata_model', 'tempat_wisata');
            $temp_wst = $this->tempat_wisata->getById($_idtempat_wisata);
            $data['temp_wst'] = $temp_wst;
    
            $config['upload_path'] = './upload/photos';
            $config['allowed_types'] = '|jpeg|png|jpg';
            $config['max_sise'] = 2894;
            $config['max_width'] = 2894;
            $config['max_height'] = 2894;
            $config['file_name'] = $temp_wst->id;
    
            //menginisialisasi file upload
            $this->load->library('upload',$config);
    
            if (!$this->upload->do_upload('foto')) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $data['error'] = 'data sukses';
                $data['upload_data'] = $this->upload->data();
            }
            // kirim dan render ke detail
            $this->load->view('layout/header');
            $this->load->view('tempat_wisata/detail', $data);
            $this->load->view('layout/footer');
    
            
        }
}
?>