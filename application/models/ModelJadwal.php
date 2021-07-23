<?php

class ModelJadwal extends CI_Model{
    public function getDataByStatus($status){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas,tbl_jadwal
        WHERE
        tbl_siswa.id_user = tbl_user.id_user AND
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
        tbl_user.id_user = tbl_jadwal.id_user AND
        is_verify = 1 AND
        status_pemberitahuan = ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
    public function getDataJadwalByStatus($status){
        $sql = "SELECT * FROM tbl_pendaftaran,tbl_siswa,tbl_kelas
        WHERE
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas AND
        is_verify = 1 AND
        status_pemberitahuan = ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
    public function addData($data)
    {
        return $this->db->insert('tbl_jadwal',$data);
    }

    public function getDataJadwal($id){
        $sql = "SELECT * FROM tbl_jadwal WHERE id_user = ? ORDER BY id_jadwal DESC";
        return $this->db->query($sql,$id)->row_array();
    }

    public function  getDataHasilBy2Status($status){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas,tbl_jadwal,tbl_penilaian
                    WHERE
                    tbl_siswa.id_user = tbl_user.id_user AND
                    tbl_pendaftaran.nis = tbl_siswa.nis AND
                    tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
                    tbl_user.id_user = tbl_jadwal.id_user AND
                    -- tbl_penilaian.id_pendaftaran = tbl_pendaftaran.id_pendaftaran AND
                    is_verify = 1 AND
                    status_pemberitahuan >= ? GROUP BY tbl_pendaftaran.nis ORDER BY tbl_pendaftaran.id_pendaftaran DESC
                    ";
        return $this->db->query($sql,$status)->result_array();
    }

    public function getDataPendaftaran($status){
        $sql = "SELECT * FROM tbl_pendaftaran 
                    JOIN tbl_siswa ON tbl_pendaftaran.nis = tbl_siswa.nis 
                    JOIN tbl_kelas ON tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas
                    JOIN tbl_user ON tbl_siswa.id_user = tbl_user.id_user
                    JOIN tbl_jadwal ON tbl_jadwal.id_user = tbl_user.id_user
                     WHERE
                    is_verify = 1 AND
                    status_pemberitahuan >= ? ORDER BY tbl_pendaftaran.id_pendaftaran DESC";
        return $this->db->query($sql,$status)->result_array();
    }

    public function getHasilByIDPendaftaran($idPendaftaran){
        $sql = "SELECT * FROM tbl_penilaian WHERE id_pendaftaran = ?";
        return $this->db->query($sql,$idPendaftaran)->row_array();
    }
    public function addDataJadwalPendaftaran($data){
        return $this->db->insert('tbl_jadwal_pendaftaran', $data);
    }
    public function updateDataJadwalPendaftaran($data_update, $id_jadwal_pendaftaran){
        return $this->db->update('tbl_jadwal_pendaftaran', $data_update, array('id_jadwal_pendaftaran' => $id_jadwal_pendaftaran));
    }
}
