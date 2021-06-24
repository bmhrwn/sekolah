<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSiswa');
        $this->load->model('ModelKelas');
        $this->load->model('ModelKuota');
        $this->load->model('ModelJadwal');
        $this->load->model('ModelHasil');
        $this->load->model('ModelSoal');
        $this->load->model('ModelKriteria');

        if ($this->session->userdata('username') == null || $this->session->userdata('admin') != true) {
            redirect(base_url());
        }
    }
    public function index()
    {   
        $lolos = $this->ModelSiswa->getDataVerifikasiSiswaLolos();
        $tidakLolos = $this->ModelSiswa->getDataVerifikasiSiswaTidakLolos();
        $kuotaKelas1 = $this->ModelKelas->getDataKelas(1);
        $kuotaKelas2 = $this->ModelKelas->getDataKelas(2);
        $kuotaKelas3 = $this->ModelKelas->getDataKelas(4);
        $data = [
            'title' => 'Dashboard',
            'active_home'   => 'active',
            'lolos' => count($lolos),
            'tidak_lolos' => count($tidakLolos),
            'kelas1' => $kuotaKelas1['jumlah_kuota'],
            'kelas2' => $kuotaKelas2['jumlah_kuota'],
            'kelas3' => $kuotaKelas3['jumlah_kuota'],
        ];
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/layout/content');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_student()
    {
        $data = array(
            'title' => 'Data Siswa Mutasi',
            'data_student' => $this->ModelSiswa->getData(),
            'active_student'    => "active"
        );
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/data/data_student');
        $this->load->view('dashboard/layout/footer');
    }
    public function verifikasi_student()
    {

        $data = array(
            'title' => 'Verifikasi Dokumen',
            'data_verifikasistudent' => $this->ModelSiswa->getDataVerifikasiSiswa(),
            'data_verifikasilolos' => $this->ModelSiswa->getDataVerifikasiSiswaLolos(),
            'data_verifikasitidaklolos' => $this->ModelSiswa->getDataVerifikasiSiswaTidakLolos(),
            'active_verifikasi'    => "active"
        );

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/data/verifikasi_student');
        $this->load->view('dashboard/layout/footer');
    }
    public function kriteria(){

        $data = array(
            'title' => 'Data Kriteria',
            'active_kriteria' => 'active',
            'data_kriteria' => $this->ModelKriteria->getDataKriteria(),

        );
        // var_dump($data['data_kriteria'][0]['kriteria']);die;

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/kriteria/data_kriteria');
        $this->load->view('dashboard/layout/footer');

    }

    public function data_class()
    {
        $data = array(
            'title' => 'Data Kelas',
            'data_class' => $this->ModelKelas->getData(),
            'active_class' => 'active'
        );

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/class/data_class');
        $this->load->view('dashboard/layout/footer');
    }

    public function kuota_mutasi()
    {
        $data = array(
            'title' => 'Data Kuota Mutasi',
            'data_kelas' => $this->ModelKuota->getDataKelas(),
            'data_kuota' => $this->ModelKuota->getDataKuota(),
            'active_kuota' => 'active'
        );

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/kuota/v_kuota');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_jadwal()
    {
        $data = array(
            'title' => 'Data Jadwal',
            'data_jadwal' => $this->ModelJadwal->getDataJadwalByStatus(1),
            'active_jadwal' => 'active'
        );
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/testertulis/v_jadwal');
        $this->load->view('dashboard/layout/footer');
    }
    public function data_wawancara(){

        $data = array(
            'title' => 'Data Wawancara',
            'active_wawancara' => 'active'
        );
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/testertulis/v_wawancara');
        $this->load->view('dashboard/layout/footer');

    }
    public function data_hasil()
    {
        $data = array(
            'title' => 'Data Hasil',
            'data_hasil' => $this->ModelJadwal->getDataHasilBy2Status(2),
            'active_hasil' => 'active'
        );
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/testertulis/v_hasil');
        $this->load->view('dashboard/layout/footer');
    }

    public function data_soal(){

        $data = [
            'title' => "Data Soal",
            'data_soal' => $this->ModelSoal->getDataSoal(),
            'data_kelas' => $this->ModelKuota->getDataKelas(),
            'active_soal' => 'active'
        ];

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/data/data_soal');
        $this->load->view('dashboard/layout/footer');
    }

    public function getDatesFromRange($start, $end, $format = 'Y-m-d') {
        $array = array();
        $interval = new DateInterval('P1D');
    
        $realEnd = new DateTime($end);
        $realEnd->add($interval);
    
        $period = new DatePeriod(new DateTime($start), $interval, $realEnd);
    
        foreach($period as $date) { 
            $array[] = $date->format($format); 
        }
    
        return $array;
    }
    public function data_normalisasi()
    {
        $kuotaKelas1 = $this->ModelKelas->getDataKelas(1);
        $kuotaKelas2 = $this->ModelKelas->getDataKelas(2);
        $kuotaKelas3 = $this->ModelKelas->getDataKelas(4);
        $data = array(
            'title' => 'Data Normalisasi',
            'active_normalisasi' => 'active',
            'data_normalisasi_1' => $this->ModelHasil->getDataPenilaianAkhir(1),
            'data_normalisasi_2' => $this->ModelHasil->getDataPenilaianAkhir(2),
            'data_normalisasi_3' => $this->ModelHasil->getDataPenilaianAkhir(4),
            'data_student' => $this->ModelSiswa->getData(),
            'kelas1' => $kuotaKelas1['jumlah_kuota'],
            'kelas2' => $kuotaKelas2['jumlah_kuota'],
            'kelas3' => $kuotaKelas3['jumlah_kuota'],
        );  
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/penilaian/data_normalisasi');
        $this->load->view('dashboard/layout/footer');
    }

    public function hitungNormalisasi(){

        //ambil kriteria
        $kriteria = $this->ModelKriteria->getDataKriteria();
        $kriteriaCost = $this->ModelKriteria->getDataKriteriaByTipe('cost');
        $kriteriaBenefit = $this->ModelKriteria->getDataKriteriaByTipe('benefit');

        //ambil nilai dari setiap produk
        $nilaiSiswa = $this->ModelHasil->getDataPenilaian();


        //hasil max setiap kriteria dalam bentuk array
        $hasilMaxDariSetiapKriteria = array();
        $hasilMinDariSetiapKriteria = array();

        //hasil pembagian antara nilai kriteria dan nilai max kriteria
        $nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria = array();
        $nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMinKriteria = array();

         //mencari nilai max dari kriteria benefit
         foreach ($kriteriaBenefit as $kBenefit) {
            $hasilMaxKriteria = $this->ModelHasil->ambilNilaiMaxBerdasarkanKriteria($kBenefit['kriteria']);

            array_push($hasilMaxDariSetiapKriteria, array(
                'kriteria' => $kBenefit['kriteria'],
                'hasil' => $hasilMaxKriteria[0][$kBenefit['kriteria']],
            ));
        }

        foreach ($nilaiSiswa as $n) {
            $c = array();

            //mencari nilai normalisasi karena faktor kriteria benefit berdasarkan nilai maksimal
            foreach ($hasilMaxDariSetiapKriteria as $hmxdsk) {
                array_push($c, array(
                    'kriteria' => $hmxdsk['kriteria'],
                    'hasil' => $n[$hmxdsk['kriteria']] / $hmxdsk['hasil'],
                ));
            }
            //mencari nilai normalisasi karena faktor kriteria cost berdasarkan nilai minimal
            // foreach ($hasilMinDariSetiapKriteria as $hmndsk) {
            //     array_push($c, array(
            //         'kriteria' => $hmndsk['kriteria'],
            //         'hasil' =>  $hmndsk['hasil'] / $n[$hmndsk['kriteria']],
            //     ));
            // }
            array_push($nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria, array(
                'id_pendaftaran' => $n['id_pendaftaran'],
                'hasil_akhir' => $c,
            ));
        }
        $this->ModelHasil->deleteAllNormalisasi();
        foreach ($nilaiHasilBagiAntaraNilaiKriteriaDanNilaiMaxKriteria as $n) {
            $addData = array(
                array(
                    'nilai_mtk' => $n['hasil_akhir'][0]['hasil'] * $kriteria[0]['bobot'],
                    'nilai_bingg' => $n['hasil_akhir'][1]['hasil'] * $kriteria[1]['bobot'],
                    'nilai_bindo' => $n['hasil_akhir'][2]['hasil'] * $kriteria[2]['bobot'],
                    'nilai_wawancara' => $n['hasil_akhir'][3]['hasil'] * $kriteria[4]['bobot'],
                    'nilai_tes' => $n['hasil_akhir'][4]['hasil'] * $kriteria[4]['bobot'],
                    'total_nilai' => ($n['hasil_akhir'][0]['hasil'] * $kriteria[0]['bobot']) *
                        ($n['hasil_akhir'][1]['hasil'] * $kriteria[1]['bobot']) *
                        ($n['hasil_akhir'][2]['hasil'] * $kriteria[2]['bobot']) *
                        ($n['hasil_akhir'][3]['hasil'] * $kriteria[3]['bobot']) *
                        ($n['hasil_akhir'][4]['hasil'] * $kriteria[4]['bobot']),
                    'id_pendaftaran'   => $n['id_pendaftaran'],

                )
            );
            $this->ModelHasil->insertPenilaian($addData);
        }
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Perhitungan berhasil diproses');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('dashboard/data_normalisasi'));
    }

    public function data_akhir()
    {
        $data = array(
            'title' => 'Data Hasil Akhir',
            'active_akhir' => 'active',
           
        );
      
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/penilaian/data_akhir');
        $this->load->view('dashboard/layout/footer');
    }
}
