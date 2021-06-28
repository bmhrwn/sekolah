<?php

Class ModelKriteria extends CI_Model{
    public function addKriteria($data){
        return $this->db->insert('tbl_kriteria', $data);
    }
    public function getDataKriteria(){
        return $this->db->get('tbl_kriteria')->result_array();
    }

    public function getDataKriteriaByTipe($kriteria){
        return $this->db->get_where('tbl_kriteria',array('tipe_kriteria' => $kriteria))->result_array();
    }
}