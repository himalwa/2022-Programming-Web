<?php
class Login extends CI_Controller{
    public function index(){
        $data = [];
		$this->load->view('login/index', $data);
    }
    public function authentication(){
        $this->load->model("users_model", "users");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->users->login($_username,$_password);
        if(isset($row)){//jika users terdaftar di database
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USERS', $row);
            redirect(base_url().'index.php/home');
        }else{//jika users tida terdaftar di database
            redirect(base_url().'index.php/login?status=f');
        }
    }
    // public function auth(){
    //     // mengambil data yang telah diinput di form login
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     // cek user login apkah sudah benar, jika benar arahkan ke halaman mahasiswa, jika salah kembali kelogin
    //     if ($username == 'admin' && $password =='admin') {
    //         $userdata = [
    //             "username" => $username,
    //             "logged_in" => TRUE,
    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/home');
    //         redirect('/jeniswisata');
    //         redirect('/kecamatan');
    //         redirect('/komentar');
    //         redirect('/nilairating');
    //         redirect('/tempatwisata');
    //     } 
    //     elseif ($username == 'member' && $password =='member') {
    //         $userdata = [
    //             "username" => $username,
    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/komentar');
    //         redirect('/dashbord');
    //         redirect('/nilairating');
    //     }
    //     elseif ($username == 'public' && $password =='public') {
    //         $userdata = [
    //             "username" => $username,
    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/komentar');
    //         redirect('/dashbord');
    //         redirect('/nilairating');
    //     }
    //     else {
    //         redirect('/login');
    //     }
    // }
    // public function logout(){
    //     $this->session->unset_userdata('USERNAME');
    //     $this->session->unset_userdata('ROLE');
    //     $this->session->unset_userdata('USERS');
    //     redirect(base_url().'index.php/login');
    // }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}
?>