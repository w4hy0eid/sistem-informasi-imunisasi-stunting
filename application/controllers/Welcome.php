<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('dashboard_model');
		if ($this->login_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{

		$data["user"] = $this->dashboard_model->getUserbySeS();
		
		$data["TotalBalita"] = $this->dashboard_model->TotalBalita();
		$data["TotalPosyandu"] = $this->dashboard_model->TotalPosyandu();
		$data["TotalImunisasiLengkap"] = $this->dashboard_model->TotalImunisasiLengkap();
		$data["TotalImunisasi"] = $this->dashboard_model->TotalImunisasi();
		$data["ImunisasiTerbaru"] = $this->dashboard_model->Imunisasi_Terbaru();
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$cengkareng = $this->dashboard_model->get_kecamatan_cengkareng();
		foreach ($cengkareng as $row) {

			$cengkareng = (int) $row->cengkareng;
		}
		$data["cengkareng"] = $cengkareng;

		$grogol = $this->dashboard_model->get_kecamatan_grogol();
		foreach ($grogol as $row) {

			$grogol = (int) $row->grogol;
		}

		$data["grogol"] = $grogol; 
		
		//$data["cengkareng"] = $this->dashboard_model->get_kecamatan_cengkareng();
		$taman = $this->dashboard_model->get_kecamatan_taman();

		$taman = $this->dashboard_model->get_kecamatan_grogol();
		foreach ($taman as $row) {

			$taman = (int) $row->taman;
		}
		$data["taman"] = $taman;
		$tambora = $this->dashboard_model->get_kecamatan_tambora();
		foreach ($tambora as $row) {

			$tambora = (int) $row->tambora;
		}

		$data["tambora"] = $tambora;

		$kebon = $this->dashboard_model->get_kecamatan_kebon();
		foreach ($kebon as $row) {

			$kebon = (int) $row->kebon;
		}
		$data["kebon"] = $kebon;
		$kalideres = $this->dashboard_model->get_kecamatan_kalideres();
		foreach ($kalideres as $row) {

			$kalideres = (int) $row->kalideres;
		}
		$data["kalideres"] = $kalideres;

		$palmerah = $this->dashboard_model->get_kecamatan_palmerah();
		foreach ($palmerah as $row) {

			$palmerah = (int) $row->palmerah;
		}
		$data["palmerah"] = $palmerah;
		$kembangan = $this->dashboard_model->get_kecamatan_kembangan();
		foreach ($kembangan as $row) {

			$kembangan = (int) $row->kembangan;
		}
		$data["kembangan"] = $kembangan;
		$total = $this->dashboard_model->get_kecamatan_total();	
		$record = $this->dashboard_model->Chart_Line();
		$recordb = $this->dashboard_model->Chart_Batang();
		foreach ($record as $row) {

			$chart["label"][] = $row->nama_bulan;

			$chart["total"][] = (int) $row->total;
		}

		foreach ($recordb as $row) {

			$chartb["label"][] = $row->nama_posyandu;

			$chartb["total"][] = (int) $row->total;
		}

		$data["ChartLine"] = json_encode($chart);

		$data["ChartBatang"] = json_encode($chartb);
		
		$this->load->view('dashboard/index', $data);
	}

	public function dataall()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$data["kecamatan"] = $this->dashboard_model->Kategori_Kecamatan();
		$this->load->view('dashboard/masterdata/list_data_balita', $data);
	}

	public function dataposyandu()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$this->load->view('dashboard/masterdata/list_data_posyandu', $data);
	}

	public function user()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["users"] = $this->dashboard_model->datauser();
		$this->load->view('dashboard/masterdata/list_data_user', $data);
	}

	public function edukasi()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["edukasi"] = $this->dashboard_model->dataedukasi();

		
		$this->load->view('dashboard/masterdata/list_data_edukasi', $data);
	}

	public function edit_balita($id = null){
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["detail"] = $this->dashboard_model->Details_Balita($id)->row();
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$data["kecamatan"] = $this->dashboard_model->Kategori_Kecamatan();
		$this->load->view('dashboard/masterdata/form_edit_balita', $data);
	}


	public function edit_user($id = null){
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["detail"] = $this->dashboard_model->Details_User($id)->row();
		
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$data["kecamatan"] = $this->dashboard_model->Kategori_Kecamatan();
		$this->load->view('dashboard/masterdata/form_edit_user', $data);
	}

	public function edit_edukasi($id = null){
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["detail"] = $this->dashboard_model->Details_Edukasi($id)->row();
		
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$data["kecamatan"] = $this->dashboard_model->Kategori_Kecamatan();
		$this->load->view('dashboard/masterdata/form_edit_edukasi', $data);
	}
	public function edit_posyandu($id = null){
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["detail"] = $this->dashboard_model->Details_Posyandu($id)->row();
		
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$data["kecamatan"] = $this->dashboard_model->Kategori_Kecamatan();
		$this->load->view('dashboard/masterdata/form_edit_posyandu', $data);
	}

	

	public function details_balita($id = null)
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		if (!isset($id)) redirect(site_url());
		$data["detail"] = $this->dashboard_model->Details_Balita($id)->row();
		
		$data["r_timbang"] = $this->dashboard_model->Details_Balita_t($id)->result();
		
		$data["umur"] = $this->dashboard_model->Details_Balita($id)->row("tanggal_lahir");
		$data["jk"] = $this->dashboard_model->Details_Balita($id)->row("jenis_kelamin");
		$tes = $this->dashboard_model->Details_Balita_t($id)->row('usia_timbang');
		$tes1 = (float) $tes;
		
		$lahir = new DateTime($data["umur"]);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir);
		// $tahinkebulan = $umur->y*12+$umur->m;
		$tahinkebulan = $tes1;
		$data['usia'] = $tes1;
		$output = array(
            "usia" => "$umur->y Tahun $umur->m Bulan $umur->d Hari",
            "usia_bulan" => $tahinkebulan = $umur->y*12+$umur->m,
            "now" => date("Y-m-d")
        );

		if($data["jk"] == "Laki-Laki"){
			if($tahinkebulan >= 0 && $tahinkebulan <= 24 ){
				$bul1 = 0;
				$bul2 = 24;
				$star = $tahinkebulan - $bul1 ;
				

				$berat = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				
				$i = 1;
				for ( ; ; ) {
					if ($i > $star) {
						break;
					}
				$chart["bayi"][] = NULL;
				$i++;
				}
				$chart["bayi"][] = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				$index_lk = $this->dashboard_model->get_index_lk($bul1,$bul2);
				foreach ($index_lk as $row) {
					$chart["label"][] = (int) $row->Month;
					$chart["dataOne"][] = (float) $row->SD3neg;
					$chart["dataTwo"][] = (float) $row->SD2neg;
					$chart["dataThree"][] = (float) $row->SD1neg;
					$chart["dataFour"][] = (float) $row->SD0;
					$chart["dataFive"][] = (float) $row->SD1;
					$chart["dataSix"][] = (float) $row->SD2;
					$chart["dataSeven"][] = (float) $row->SD3;
				}
				$data["line"] = json_encode($chart);
			}else{
				$bul1 = 25;
				$bul2 = 60;
				$star = $tahinkebulan - $bul1 ;
				

				$berat = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				
				$i = 1;
				for ( ; ; ) {
					if ($i > $star) {
						break;
					}
				$chart["bayi"][] = NULL;
				$i++;
				}
				$chart["bayi"][] = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				$index_lk = $this->dashboard_model->get_index_lk($bul1,$bul2);
				foreach ($index_lk as $row) {
					$chart["label"][] = (int) $row->Month;
					$chart["dataOne"][] = (float) $row->SD3neg;
					$chart["dataTwo"][] = (float) $row->SD2neg;
					$chart["dataThree"][] = (float) $row->SD1neg;
					$chart["dataFour"][] = (float) $row->SD0;
					$chart["dataFive"][] = (float) $row->SD1;
					$chart["dataSix"][] = (float) $row->SD2;
					$chart["dataSeven"][] = (float) $row->SD3;
				}
				$data["line"] = json_encode($chart);
				
				
			}
		}else{
			if($tahinkebulan >= 0 && $tahinkebulan <= 24 ){
				$bul1 = 0;
				$bul2 = 24;
				$star = $tahinkebulan - $bul1 ;
				

				$berat = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				
				$i = 1;
				for ( ; ; ) {
					if ($i > $star) {
						break;
					}
				$chart["bayi"][] = NULL;
				$i++;
				}
				$chart["bayi"][] = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				$index_lk = $this->dashboard_model->get_index_pr($bul1,$bul2);
				foreach ($index_lk as $row) {
					$chart["label"][] = (int) $row->Month;
					$chart["dataOne"][] = (float) $row->SD3neg;
					$chart["dataTwo"][] = (float) $row->SD2neg;
					$chart["dataThree"][] = (float) $row->SD1neg;
					$chart["dataFour"][] = (float) $row->SD0;
					$chart["dataFive"][] = (float) $row->SD1;
					$chart["dataSix"][] = (float) $row->SD2;
					$chart["dataSeven"][] = (float) $row->SD3;
				}
				$data["line"] = json_encode($chart);
			}else{
				$bul1 = 25;
				$bul2 = 60;
				$star = $tahinkebulan - $bul1 ;
				

				$berat = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				
				$i = 1;
				for ( ; ; ) {
					if ($i > $star) {
						break;
					}
				$chart["bayi"][] = NULL;
				$i++;
				}
				$chart["bayi"][] = $this->dashboard_model->Details_Balita_t($id)->row('berat_badan');
				$index_lk = $this->dashboard_model->get_index_pr($bul1,$bul2);
				foreach ($index_lk as $row) {
					$chart["label"][] = (int) $row->Month;
					$chart["dataOne"][] = (float) $row->SD3neg;
					$chart["dataTwo"][] = (float) $row->SD2neg;
					$chart["dataThree"][] = (float) $row->SD1neg;
					$chart["dataFour"][] = (float) $row->SD0;
					$chart["dataFive"][] = (float) $row->SD1;
					$chart["dataSix"][] = (float) $row->SD2;
					$chart["dataSeven"][] = (float) $row->SD3;
				}
				$data["line"] = json_encode($chart);

				
			}
		}
		
		
		$data["riwayat"] = $this->dashboard_model->Details_Balita($id)->result();
		
		$this->load->view('dashboard/masterdata/details_data_balita', $data);
	}

	public function pelayanan_imunisasi()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$this->load->view('dashboard/pelayanan/imunisasi', $data);
	}

	public function pelayanan_timbangan()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$this->load->view('dashboard/pelayanan/timbangan', $data);
	}

	public function data_lengkap()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$this->load->view('dashboard/sertifikat/list_data_lengkap', $data);
	}

	public function device_whatsapp()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$this->load->view('dashboard/whatsapp/device', $data);
	}

	public function whatsapp_broadcast()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$this->load->view('dashboard/whatsapp/send', $data);
	}



	public function cetak_sertifikat($id = null)
	{
		if (!isset($id)) redirect(site_url());
		$this->load->library('pdf');
		$data["balita"] = $this->dashboard_model->getUserbyID($id);
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$date = date("Y-m-d_H_i_s");
		$this->pdf->set_option('isHtml5ParserEnabled', true);
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->loadHtml(ob_get_clean());
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Sertifikat-Imunisasi-$id-$date.pdf";
		$this->pdf->load_view('dashboard/sertifikat/template', $data);
	}
	public function cetak_laporan_bulan($id = null)
	{
		if (!isset($id)) redirect(site_url());
		$this->load->library('pdf');
		$data["balita"] = $this->dashboard_model->getUserbyID($id);
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$date = date("Y-m-d_H_i_s");
		$this->pdf->set_option('isHtml5ParserEnabled', true);
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->loadHtml(ob_get_clean());
		$this->pdf->setPaper('A3', 'landscape');
		$this->pdf->filename = "Laporan-Bulan-$date.pdf";
		$this->pdf->load_view('dashboard/pelayanan/laporan-bulan', $data);
	}

	public function view_sertifikat()
	{
		$this->load->view('dashboard/sertifikat/template');
	}

	public function laporanbulanposyandu()
	{
		$data["user"] = $this->dashboard_model->getUserbySeS();
		$data["posyandu"] = $this->dashboard_model->Kategori_Posyandu();
		$this->load->view('dashboard/masterlaporan/laporanbulanposyandu', $data);
	}

	public function cetak_laporan_imunisasi($nama_posyandu = null, $date = null)
	{
		if (!isset($nama_posyandu)) redirect(site_url());
		$this->load->library('pdf');
		// $data["balita"] = $this->dashboard_model->getUserbyID($id);
		// $data["user"] = $this->dashboard_model->getUserbySeS();
		$nama_posyandu = urldecode($this->uri->segment(3));
		$date = urldecode($this->uri->segment(4));
		$data["data"] = $this->dashboard_model->print_laporan_imunisasi($nama_posyandu, $date);
		// print_r($data);
		$date = date("Y-m-d_H_i_s");
		$this->pdf->set_option('isHtml5ParserEnabled', true);
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->loadHtml(ob_get_clean());
		$this->pdf->setPaper('c2', 'landscape');
		$this->pdf->filename = "Laporan-Imunisasi-$date.pdf";
		$this->pdf->load_view('dashboard/masterlaporan/laporan_imunisasi_pdf', $data);
	}

	public function bulan(){
		$this->load->view('dashboard/graph/index');
	}
}
