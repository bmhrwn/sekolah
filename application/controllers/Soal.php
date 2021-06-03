<?php

Class soal extends CI_Controller{
    public function __construct()
    {
      parent::__construct();  
      $this->load->model('ModelSoal');
    }

    public function add_soal(){
        $nama_kelas = $this->input->post('nama_kelas');
        if($nama_kelas != null ){
        $config['upload_path']      = "./assets/admin/soal/";
        $config['allowed_types']    = 'doc|pdf|gif';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('soal')) {
            $data_soal = array('data_upload' => $this->upload->data());
            $soal = $data_soal['data_upload']['file_name'];
            
            $data = array(
                'kelas' => $nama_kelas,
                'soal'  => $soal,
            );
            $this->ModelSoal->insertSoal($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Soal Terupload');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_soal'));    
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Soal Tidak Terupload');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_soal'));
        }
    }else{
        $this->session->set_flashdata('type', 'warning');
        $this->session->set_flashdata('pesan', 'Kelas Tidak Boleh Kosong');
        $this->session->set_flashdata('title', 'Gagal!');
        redirect(base_url('dashboard/data_soal'));
    }
}
    public function update_soal(){
        $id_soal = $this->input->post('id_soal');
        $nama_kelas =  $this->input->post('nama_kelas');
        

        if ($nama_kelas != null) {
            $config['upload_path']      = './assets/home/soal/';
            $config['allowed_types']    = 'gif|jpg|png';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('soal')) {
                $data_file = array('upload_data' => $this->upload->data());
                $nama_file = $data_file['upload_data']['file_name'];
            }else{
                $dataFile = $this->ModelSoal->getDetailSoal($id_soal);
                $nama_file = $dataFile['soal'];
            }
            $data = array(
                'nama_kelas' => $nama_kelas,
                'soal'       => $nama_file
                
            );
            $this->ModelProduct->updateSoal($data,$id_soal);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_soal'));
        }else{
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Data Gagal Diubah');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_soal'));
        }
    }

}