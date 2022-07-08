<?php
class Tempat_Wisata_model extends CI_Model{
    public $id, $nama, $alamat, $latlong, $jenis_id, $skor_rating, $harga_tiket, $foto1, $foto2, $foto3, $kecamatan_id, $website, $fasilitas;

    public function getAll(){
        $query = $this->db->get('tempat_wisata');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('tempat_wisata', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO tempat_wisata (nama, alamat, latlong, jenis_id, skor_rating, harga_tiket, foto1, foto2, foto3, kecamatan_id, website, fasilitas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
        
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_wisata SET nama=?, alamat=?, latlong=?, jenis_id=?, skor_rating=?, harga_tiket=?, foto1=?, foto2=?, foto3v, kecamatan_id=?, website=?, fasilitas=? ";
        $this->db->query($sql, $data);
    }
    public function delete($data){
        $sql = "DELETE FROM tempat_wisata WHERE id=?";
        $this->db->query($sql, $data);
    }
}

?>