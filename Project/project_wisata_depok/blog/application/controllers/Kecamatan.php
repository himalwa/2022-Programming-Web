<?php
class Kecamatan extends CI_Controller {
        public function index(){
        $this->load->model('kecamatan_model');
        $kecamatan = $this->kecamatan_model->getAll();
        $data['kecamatan'] = $kecamatan;
        //render data dan kirim data kedalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/index', $data);
        $this->load->view('layout/footer');
        }
        // public function detail($id){
        //     // akses model mahasiswa
        //     $this->load->model('kecamatan_model');
        //     $siswa = $this->kecamatan_model->getById($id);
        //     $data['siswa'] = $siswa;
        //     //render data dan kirim data kedalam view
        //     $this->load->view('layout/header');
        //     $this->load->view('kecamatan/detail', $data);
        //     $this->load->view('layout/footer');
        // }
        public function form(){
            // rendr view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/form');
            $this->load->view('layout/footer');
        }
        public function save(){
            // akses ke model kecamatan
            $this->load->model('kecamatan_model', 'kecamatan');          // 1
            // $_id = $this->input->post('id');
            $_nama = $this->input->post('nama');
    
            // $data_kecamatan['id'] = $_id;     // 2
            $data_kecamatan['nama'] = $_nama;
    
            if((!empty($_idedit))){         // update
                $data_kecamatan['id'] = $_idedit;
                $this->kecamatan->update($data_kecamatan);
            }else{
                // data baru
                $this->kecamatan->simpan($data_kecamatan);
            }
            redirect('kecamatan', 'refresh');
        }
        public function edit($id){
            // akses midel kecamatan
            $this->load->model('kecamatan_model', 'kecamatan');
            $obj_kecamatan = $this->kecamatan->getById($id);
            $data['obj_kecamatan'] = $obj_kecamatan;
            //render data dan kirim data kedalam view
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kecamatan/edit', $data);
            $this->load->view('layout/footer'); 
        }
        public function delete($id){
            // akses midel kecamatan
            $this->load->model('kecamatan_model', 'kecamatan');
            // mengecek data kecamatan berdasarkan id
            $data_kecamatan['id'] = $id;
            $this->kecamatan->delete($data_kecamatan);
            redirect('kecamatan', 'refresh');
        }
        // public function __construct()
        // {
        //     parent::__construct();
        //     if (!$this->session->userdata('logged_in')) {
        //         redirect('/login');
        //     }
        // }
        // public function upload(){
        //     $_idkecamatan=$this->input->post("idkecamatan");
        //     $this->load->model('kecamatan_model', 'kecamatan');
        //     $siswa = $this->kecamatan->getById($_idkecamatan);
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
        //     $this->load->view('kecamatan/detail', $data);
        //     $this->load->view('layout/footer');
    
            
        // }

}
?>