<?php

    class ModelSoal extends CI_Model{

        public function getDataSoal(){
            $sql = "SELECT * FROM tbl_soal 
                        JOIN tbl_kelas ON tbl_soal.kelas = tbl_kelas.id_kelas";
            return $this->db->query($sql)->result_array();
        }
        public function insertSoal($data){
            return $this->db->insert('tbl_soal', $data);
        }
        public function getDetailSoal($id_soal){
            $sql = "SELECT * FROM tbl_soal 
            JOIN tbl_kelas ON tbl_soal.kelas = tbl_kelas.id_kelas";
            return $this->db->query($sql,$id_soal)->result_array();
        }
        public function updateSoal($data,$id_soal){
            return $this->db->update('tbl_soal',$data,array('id_soal' => $id_soal));
        }
    }