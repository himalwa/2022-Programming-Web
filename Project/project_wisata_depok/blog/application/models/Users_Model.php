<?php
class Users_Model extends CI_Model{
    private $tabel = "users";

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function fineById(){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function login($uname,$pass){
        $sql = "SELECT * FROM users WHERE username=? and password=MD5(?)";
        $data = [$uname,$pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
}
?>