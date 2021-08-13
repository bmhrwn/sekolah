<?php

class ModelLaporan extends CI_Model{
public function getDataLolosKelas1(){
    $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_kelas,tbl_normalisasi 
            WHERE
            tbl_pendaftaran.nis = tbl_siswa.nis and
            tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas and
            tbl_normalisasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran and
            tbl_kelas.id_kelas = 1 and tbl_normalisasi.status = 1";
            return $this->db->query($sql)->result_array();
}
public function getDataLolosKelas2(){
    $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_kelas,tbl_normalisasi 
    WHERE
    tbl_pendaftaran.nis = tbl_siswa.nis and
    tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas and
    tbl_normalisasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran and
    tbl_kelas.id_kelas = 2 and tbl_normalisasi.status = 1";
    return $this->db->query($sql)->result_array();
}
public function getDataLolosKelas3(){
    $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_kelas,tbl_normalisasi 
    WHERE
    tbl_pendaftaran.nis = tbl_siswa.nis and
    tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas and
    tbl_normalisasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran and
    tbl_kelas.id_kelas = 4 and tbl_normalisasi.status = 1";
    return $this->db->query($sql)->result_array();
}
public function getDataChart($status){
    $sql = "SELECT * FROM tbl_normalisasi WHERE status = ?";
    return $this->db->query($sql,$status)->result_array($status);
}

public function getDataChartBySemester($status,$semester,$tahun){
    $sql = "SELECT * FROM tbl_normalisasi
                JOIN tbl_pendaftaran ON tbl_normalisasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran 
                WHERE semester = ? AND
                      YEAR(tahun) = ? AND
                      status = ?";
    return $this->db->query($sql,[$semester,$tahun,$status])->result_array();
}

}