<?php
class blog extends CI_Controller{
    // buat method index untuk menampilkan data blog
    public function index(){
        $data ['nama'] = "CodeInigter 3";
        $this->load->view("blog/add");
    }
}
?>