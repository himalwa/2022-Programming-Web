<?php
class Mahasiswa_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        // contoh penggunaan ternary operator
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function getAll(){
        // menampilkan seluruh data yang ada di tabel mahasiswa menggunakan query builder
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function getById($id){
        // menampilkan atau mengambil data berdasarkan id menggunakan query builder
        $query = $this->db->get_where('mahasiswa',['id' => $id]);
        return $query->row();
    }
}
?>