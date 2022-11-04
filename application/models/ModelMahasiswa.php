<?php

class ModelMahasiswa extends CI_Model
{
    public function get_mahasiswa(){
        $query = $this->db->get('tb_mhs');
        return $query->result();
    }

    public function get_mahasiswa_by_id($nrp){
        $this->db->where('nrp', $nrp);
        $query = $this->db->get('tb_mhs');
        return $query->row();
    }
}