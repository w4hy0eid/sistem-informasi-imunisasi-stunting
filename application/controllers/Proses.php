<?php

class Proses extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('dashboard_model');
    }

    public function login()
    {
        $this->login_model->doLogin();
    }

    public function simpan_data_balita()
    {
        $this->dashboard_model->simpan_data_balita();
    }

    public function simpan_data_posyandu()
    {
        $this->dashboard_model->simpan_data_posyandu();
    }

    public function simpan_data_user()
    {
        $this->dashboard_model->simpan_data_user();
    }

    public function simpan_data_edukasi()
    {
        $this->dashboard_model->simpan_data_edukasi();
    }

    public function simpan_riwayat_imunisasi()
    {
        $this->dashboard_model->simpan_riwayat_imunisasi();
    }

    public function simpan_edit_balita()
    {
        $this->dashboard_model->simpan_edit_balita();
    }
    public function simpan_edit_user()
    {
        $this->dashboard_model->simpan_edit_user();
    }
    public function simpan_edit_edukasi()
    {
        $this->dashboard_model->simpan_edit_edukasi();
    }

    public function simpan_edit_posyandu()
    {
        $this->dashboard_model->simpan_edit_posyandu();
    }

    public function simpan_riwayat_berat_badan()
    {
        $this->dashboard_model->simpan_riwayat_berat_badan();
    }

    public function delete_data_balita()
    {
        $this->dashboard_model->delete_data_balita();
    }

    public function delete_data_posyandu()
    {
        $this->dashboard_model->delete_data_posyandu();
    }

    public function delete_data_user()
    {
        $this->dashboard_model->delete_data_user();
    }

    public function delete_data_edukasi()
    {
        $this->dashboard_model->delete_data_edukasi();
    }

    public function cari_balita()
    {
        $session = $this->session->userdata('SeS-Imunisasi');
        $this->dashboard_model->cari_balita($this->input->get("q"));
    }

    public function ambil_data_balita()
    {
        $this->dashboard_model->ambil_data_balita();
    }

    public function cek_user(){
        $username = $this->input->post('username'); 
        $sql = $this->db->query("SELECT username FROM users WHERE username='$username'");
        $cek_user = $sql->num_rows();
        echo $cek_user;
    } 

    public function hitung_umur()
    {
        $post = $this->input->post();
        $lahir = new DateTime($post['tanggal_lahir']);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir);
        if ($umur->m >= 0 && $umur->m < 2) {
            $range = "0-2 Bulan";
            $rekomendasi = "Imunisasi BCG & Polio 1";
        } elseif ($umur->m >= 2 && $umur->m < 3) {
            $range = "2-3 Bulan";
            $rekomendasi = "Imunisasi DPT/HB 1 & Polio 2";
        } elseif ($umur->m >= 3 && $umur->m < 4) {
            $range = "3-4 Bulan";
            $rekomendasi = "Imunisasi DPT/HB 2 & Polio 3";
        } elseif ($umur->m >= 4 && $umur->m < 5) {
            $range = "4-5 Bulan";
            $rekomendasi = "Imunisasi DPT/HB 3 & Polio 4";
        } elseif ($umur->m >= 9 && $umur->m < 10) {
            $range = "9-10 Bulan";
            $rekomendasi = "Imunisasi Campak";
        } else {
            $range = "-";
            $rekomendasi = "Rekomendasi dari Petugas";
        }
        $output = array(
            "usia" => "$umur->y Tahun $umur->m Bulan $umur->d Hari",
            "usia_bulan" => $umur->m,
            "rekomendasi_imusisasi" => $rekomendasi,
            "range" => $range,
            "now" => date("Y-m-d")
        );

        // $tahinkebulan = $umur->y*12;
        // $output = array(
        //     "usia" => "$umur->y Tahun $umur->m Bulan $umur->d Hari",
        //     "usia_bulan" => $tahinkebulan+$umur->m,
        //     "rekomendasi_imusisasi" => $rekomendasi,
        //     "range" => $range,
        //     "now" => date("Y-m-d")
        // );
        echo json_encode($output);
    }

    public function hitung_umur1()
    {
        $post = $this->input->post();
        $lahir = new DateTime($post['tanggal_lahir']);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir);
        $umurb = $tahinkebulan = $umur->y*12+$umur->m;
        if ($umurb >= 0 && $umurb < 2) {
            $range = "0-2 Bulan";
            $rekomendasi = "Imunisasi BCG & Polio 1";
        } elseif ($umurb >= 2 && $umurb < 3) {
            $range = "2-3 Bulan";
            $rekomendasi = "Imunisasi DPT/HB 1 & Polio 2";
        } elseif ($umurb >= 3 && $umurb < 4) {
            $range = "3-4 Bulan";
            $rekomendasi = "Imunisasi DPT/HB 2 & Polio 3";
        } elseif ($umurb >= 4 && $umurb < 5) {
            $range = "4-5 Bulan";
            $rekomendasi = "Imunisasi DPT/HB 3 & Polio 4";
        } elseif ($umurb >= 9 && $umurb < 10) {
            $range = "9-10 Bulan";
            $rekomendasi = "Imunisasi Campak";
        } else {
            $range = "-";
            $rekomendasi = "Rekomendasi dari Petugas";
        }
        // $output = array(
        //     "usia" => "$umur->y Tahun $umur->m Bulan $umur->d Hari",
        //     "usia_bulan" => $umur->m,
        //     "rekomendasi_imusisasi" => $rekomendasi,
        //     "range" => $range,
        //     "now" => date("Y-m-d")
        // );

        $tahinkebulan = $umur->y*12;
        $output = array(
            "usia" => "$umur->y Tahun $umur->m Bulan $umur->d Hari",
            "usia_bulan" => $tahinkebulan+$umur->m,
            "rekomendasi_imusisasi" => $rekomendasi,
            "range" => $range,
            "now" => date("Y-m-d")
        );
        echo json_encode($output);
    }

    public function cetak_laporan_posyandu_bulan()
    {
        $post = $this->input->post();
        $nama_posyandu = $post["kategori_posyandu"];
        $bulan = $post["bulan"];
        $tahun = $post["tahun"];
        redirect(site_url("masterlaporan/cetak_laporan_posyandu/$nama_posyandu/$tahun-$bulan"));
    }
}
