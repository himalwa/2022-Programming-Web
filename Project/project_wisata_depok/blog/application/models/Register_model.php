<?php 
class Register_model extends CI_model{
    public $id, $username, $password, $email, $created_id, $last_login, $status, $role;

    
    public function getById($id){
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO users (username, password, email, created_id, last_login, status, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
}
?>