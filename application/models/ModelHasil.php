<?php

class ModelHasil extends CI_Model{
    public function getDataByStatus($status){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas
        WHERE
        tbl_siswa.id_user = tbl_user.id_user AND
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
        is_verify = 1 AND
        status_pemberitahuan = ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
    public function addData($data)
    {
        return $this->db->insert('tbl_jadwal',$data);
    }

    public function getDataHasil($id){
        $sql = "SELECT * FROM tbl_jadwal WHERE id_user = ? ORDER BY id_jadwal DESC";
        return $this->db->query($sql,$id)->row_array();
    }

    public function insertPenilian($data){
        return $this->db->insert('tbl_penilaian',$data);
    }
    public function getDataNormalisasi(){
        $sql = "SELECT * FROM tbl_pendaftaran,tbl_penilaian,tbl_siswa
                WHERE 
                tbl_penilaian.id_pendaftaran = tbl_pendaftaran.id_pendaftaran and
                tbl_pendaftaran.nis = tbl_siswa.nis";
                return $this->db->query($sql)->result_array();
    }

    public function getDataPenilaian(){
        $sql = "SELECT * FROM tbl_penilaian 
                    JOIN tbl_pendaftaran ON tbl_penilaian.id_pendaftaran = tbl_pendaftaran.id_pendaftaran
                    JOIN tbl_siswa ON tbl_pendaftaran.nis = tbl_siswa.nis";
        return $this->db->query($sql)->result_array();
    }

    public function ambilNilaiMaxBerdasarkanKriteria($kriteria){
        $this->db->select_max($kriteria);

        return $this->db->get('tbl_penilaian')->result_array();
    }

    public function deleteAllNormalisasi(){
        $sql = "DELETE FROM tbl_normalisasi";
        return $this->db->query($sql);
    }

    public function insertPenilaian($data){
        return $this->db->insert_batch('tbl_normalisasi',$data);
    }

    public function getDataPenilaianAkhir($kelas){
        $sql = "SELECT *,tbl_normalisasi.nilai_mtk as nilai_mtk,tbl_normalisasi.nilai_bindo as nilai_bindo,tbl_normalisasi.nilai_bingg as nilai_bingg FROM tbl_normalisasi 
                    JOIN tbl_pendaftaran ON tbl_normalisasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran
                    JOIN tbl_siswa ON tbl_pendaftaran.nis = tbl_siswa.nis WHERE
                    tbl_pendaftaran.id_kelas = ? ORDER BY total_nilai DESC";
        return $this->db->query($sql,$kelas)->result_array();
    }

    public function updateNormalisasi($data,$id){
        return $this->db->update('tbl_normalisasi',$data,['id_pendaftaran' => $id]);
    }
}
