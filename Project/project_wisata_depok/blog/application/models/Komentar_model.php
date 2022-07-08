<?php
class Komentar_model extends CI_Model{
    public $id, $tanggal, $isi, $users_id, $wisata_id, $nilai_rating_id;

    public function getAll(){
        $query = $this->db->get('komentar');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('komentar', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO komentar (tanggal, isi, users_id, wisata_id, nilai_rating_id) VALUES (?, ?, ?, ?, ?)";
        
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_wisata SET tanggal=?, isi=?, users_id=?, wisata_id=?, nilai_rating_id=? ";
        $this->db->query($sql, $data);
    }
    public function delete($data){
        $sql = "DELETE FROM komentar WHERE id=?";
        $this->db->query($sql, $data);
    }
}

?>