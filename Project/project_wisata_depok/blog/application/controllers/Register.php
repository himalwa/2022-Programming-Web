<?php
class Register extends CI_Controller{

    public function index(){
        $data = [];
		$this->load->view('register/index', $data);
    }
}
?>