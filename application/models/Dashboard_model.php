<?php

class Dashboard_model extends CI_Model
{

    private $_user = "users";
    private $_balita = "data_balita";
    private $_vaksin = "vaksinasi";
    private $_timbang = "timbangan";
    private $_posyandu = "posyandu";
    private $_gizilk = "gizilk";
    private $_gizipr = "gizipr";
    private $_index_lk = "index_lk";
    private $_index_pr = "index_pr";
    private $_kecamatan = "kecamatan";
    private $_edukasi = "edukasi";

    public function getUserbySeS()
    {
        return $this->db->get_where($this->_user, ["username" => $this->session->userdata('SeS-imunisasi')])->row();
    }

    public function getUserbyID($id)
    {
        return $this->db->get_where($this->_balita, ["id_balita" => $id])->row();
    }

    public function TotalBalita()
    {
        $this->db->select('*');
        $this->db->from($this->_balita);
        return $this->db->get()->num_rows();
    }

    public function TotalPosyandu()
    {
        $this->db->select('*'); 
        $this->db->from($this->_posyandu);
        return $this->db->get()->num_rows();
    }

    public function TotalImunisasi()
    {
        $year = date("Y");
        $this->db->select('id_vaksinasi');
        $this->db->from($this->_vaksin);
        $this->db->where("YEAR(tanggal_vaksin)", $year);
        return $this->db->get()->num_rows();
    }

    

    public function TotalImunisasiLengkap()
    {
        $this->db->select('*');
        $this->db->from($this->_vaksin);
        $this->db->where("nama_vaksin", "CAMPAK/MR 1");
        return $this->db->get()->num_rows();
    }

    public function Kategori_Posyandu()
    {
        $this->db->select("*");
        $this->db->from($this->_posyandu);
        return $this->db->get()->result();
    }


    public function datauser()
    {
        $this->db->select("*");
        $this->db->from($this->_user);
        return $this->db->get()->result();
    }

    public function dataedukasi()
    {
        $this->db->select("*");
        $this->db->from($this->_edukasi);
        return $this->db->get()->result();
    }

    

    public function Kategori_Kecamatan()
    {
        $this->db->select("*");
        $this->db->from($this->_kecamatan);
        return $this->db->get()->result();
    }

    public function Imunisasi_Terbaru()
    {
        $date = date("Y-m-d");
        $this->db->select('*');
        $this->db->from($this->_vaksin);
        $this->db->join('data_balita', 'data_balita.id_balita = vaksinasi.id_balita');
        $this->db->where("vaksinasi.tanggal_vaksin", $date);
        $this->db->order_by("tanggal_vaksin DESC");
        // $this->db->limit("5");
        return $this->db->get()->result();
    }
    public function Chart_Line()
    {
        $year = date("Y");
        $this->db->group_by("MONTH(tanggal_vaksin)");
        $this->db->select("tanggal_vaksin");
        $this->db->select("count(*) as total, MONTHNAME(tanggal_vaksin) as nama_bulan");
        $this->db->where("YEAR(tanggal_vaksin)", $year);
        $this->db->order_by("MONTH(tanggal_vaksin),YEAR($year) ASC");
        return $this->db->from($this->_vaksin)->get()->result();
    }

    public function Chart_Batang()
    {
        $year = date("Y");
        $this->db->select('count(*) as total,posyandu as nama_posyandu');
        $this->db->from($this->_balita);
        // $this->db->where("YEAR(vaksinasi.tanggal_vaksin)", $year);
        // $this->db->join('vaksinasi', 'vaksinasi.id_balita = data_balita.id_balita');
        $this->db->group_by("posyandu");
        // $this->db->order_by("posyandu ,MONTH(tanggal_vaksin),YEAR($year) ASC");
        return $this->db->get()->result();
    }

    public function get_index_lk($bul1, $bul2){
        $this->db->select('Month,SD3neg,SD2neg,SD1neg,SD0,SD1,SD2,SD3');
        // $this->db->from($this->_index_lk);
        $this->db->where('Month BETWEEN "'.$bul1.'" AND "'.$bul2.'"');
       //$this->db->where("Month",$bul2);
       return $this->db->from($this->_index_lk)->get()->result();
    }

    public function get_kecamatan_total(){
        $this->db->select("COUNT(kecamatan) as total");
        return $this->db->from($this->_balita)->get()->result();
    }

    public function get_kecamatan_cengkareng(){
        $this->db->select("COUNT(kecamatan) as cengkareng");
        $this->db->where("kecamatan = 'cengkareng'");
        return $this->db->from($this->_balita)->get()->result();
    }

    public function get_kecamatan_grogol(){
        $this->db->select("COUNT(kecamatan) as grogol");
        $this->db->where("kecamatan = 'Grogol Petamburan'");
        return $this->db->from($this->_balita)->get()->result();
    }

    public function get_kecamatan_taman(){
        $this->db->select("COUNT(kecamatan) as taman");
        $this->db->where("kecamatan = 'Taman Sari'");
        return $this->db->from($this->_balita)->get()->result();
    }

    public function get_kecamatan_tambora(){
        $this->db->select("COUNT(kecamatan) as tambora");
        $this->db->where("kecamatan = 'Tambora'");
        return $this->db->from($this->_balita)->get()->result();
    }

    public function get_kecamatan_kebon(){
        $this->db->select("COUNT(kecamatan) as kebon");
        $this->db->where("kecamatan = 'Kebon Jeruk'");
        return $this->db->from($this->_balita)->get()->result();
    }
    public function get_kecamatan_kalideres(){
        $this->db->select("COUNT(kecamatan) as kalideres");
        $this->db->where("kecamatan = 'Kalideres'");
        return $this->db->from($this->_balita)->get()->result();
    }
    public function get_kecamatan_palmerah(){
        $this->db->select("COUNT(kecamatan) as palmerah");
        $this->db->where("kecamatan = 'Palmerah'");
        return $this->db->from($this->_balita)->get()->result();
    }
    public function get_kecamatan_kembangan(){
        $this->db->select("COUNT(kecamatan) as kembangan");
        $this->db->where("kecamatan = 'Kembangan'");
        return $this->db->from($this->_balita)->get()->result();
    }

    public function get_index_pr($bul1, $bul2){
        $this->db->select('Month,SD3neg,SD2neg,SD1neg,SD0,SD1,SD2,SD3');
        // $this->db->from($this->_index_lk);
        $this->db->where('Month BETWEEN "'.$bul1.'" AND "'.$bul2.'"');
       //$this->db->where("Month",$bul2);
       return $this->db->from($this->_index_pr)->get()->result();
    }

    public function Details_Balita($id)
    {
        $this->db->select('*');
        $this->db->from($this->_balita);
        $this->db->join('vaksinasi', 'vaksinasi.id_balita = data_balita.id_balita');
        $this->db->where('data_balita.id_balita', $id);
        $this->db->order_by('tanggal_vaksin DESC');
        return $this->db->get();
    }

    public function Details_user($id){
        $this->db->select('*');
        $this->db->from($this->_user);
        $this->db->where('id_user', $id);
        return $this->db->get();
    }

    public function Details_Edukasi($id){
        $this->db->select('*');
        $this->db->from($this->_edukasi);
        $this->db->where('id_edukasi', $id);
        return $this->db->get();
    }
    public function Details_Posyandu($id){
        $this->db->select('*');
        $this->db->from($this->_posyandu);
        $this->db->where('id_posyandu', $id);
        return $this->db->get();
    }

    public function Details_Balita_t($id)
    {
        $this->db->select('*');
        $this->db->from($this->_timbang);
        $this->db->where('id_balita', $id);
        $this->db->order_by('tanggal_timbang DESC');
        return $this->db->get();
    }

    public function print_laporan_imunisasi($nama_posyandu, $date)
    {
        $this->db->select("*");
        $this->db->from("data_balita");
        $this->db->join("posyandu", "posyandu.nama_posyandu = data_balita.posyandu");
        // $this->db->join("vaksinasi", "vaksinasi.id_balita = data_balita.id_balita", 'inner');
        $where = "posyandu.nama_posyandu LIKE '$nama_posyandu' and data_balita.date LIKE '%$date%'";
        $this->db->where($where);
        return $this->db->get()->result();
    }

    //GET DATA IMUNISASI
    public function get_jenis_imunisasi_byID($id, $jenis)
    {
        $this->db->select("*");
        $this->db->from($this->_vaksin);
        $where = "vaksinasi.id_balita LIKE '$id' and vaksinasi.nama_vaksin LIKE '$jenis'";
        $this->db->where($where);
        return $this->db->get()->row();
    }


    //Update Date Data Balita
    public function update_date($id, $date)
    {
        $this->date = $date;
        $this->db->where("id_balita", $id);
        return $this->db->update($this->_balita, $this);
    }

    //Datatables Data Balita
    private $column_order_post_databalita = array(null, 'nama_balita',  'nama_ibu', 'posyandu', 'tanggal_lahir', 'jenis_kelamin', 'kecamatan'); //field yang ada di table user
    private $column_search_post_databalita = array('nama_balita',  'nama_ibu', 'posyandu', 'tanggal_lahir', 'jenis_kelamin','kecamatan'); //field yang diizin untuk pencarian 
    private $order_post_databalita = array('date' => 'desc'); // default order 

    private function _get_datatables_query_post_databalita()
    {
        $this->db->select('*');
        $this->db->from($this->_balita);
        $this->db->order_by('id_balita DESC');
        $i = 0;

        foreach ($this->column_search_post_databalita as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_post_databalita) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_databalita[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_databalita)) {
            $order = $this->order_post_databalita;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables_post_databalita()
    {
        $this->_get_datatables_query_post_databalita();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_post_databalita()
    {
        $this->_get_datatables_query_post_databalita();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_post_databalita()
    {
        $this->db->from($this->_balita);
        return $this->db->count_all_results();
    }

    //Datatables Data Posyandu
    private $column_order_pos_dataposyandu = array(null, 'nama_posyandu'); //field yang ada di table user
    private $column_search_pos_dataposyandu = array('nama_posyandu'); //field yang diizin untuk pencarian 
    private $order_pos_dataposyandu = array('nama_posyandu' => 'ASC'); // default order 
    //Datatables Data Kecamatan
    private $column_order_pos_datakecamatan = array(null, 'kecamatan'); //field yang ada di table user
    private $column_search_pos_datakecamatan = array('kecamatan'); //field yang diizin untuk pencarian 
    private $order_pos_datakecamatan = array('kecamatan' => 'ASC'); // default order 
   //Datatables Data User
   private $column_order_pos_datauser = array(null, 'nama_lengkap'); //field yang ada di table user
   private $column_search_pos_datauser = array('nama_lengkap'); //field yang diizin untuk pencarian 
   private $order_pos_datauser = array('nama_lengkap' => 'ASC'); // default order 
      //Datatables Data edukasi
      private $column_order_pos_dataedukasi = array(null, 'nama_edukasi'); //field yang ada di table user
      private $column_search_pos_dataedukasi = array('nama_edukasi'); //field yang diizin untuk pencarian 
      private $order_pos_datedukasi = array('nama_edukasi' => 'ASC'); // default order 
  
   private function _get_datatables_query_post_dataposyandu()
    {
        $this->db->select('*');
        $this->db->from($this->_posyandu);
        $this->db->order_by('nama_posyandu ASC');
        $i = 0;

        foreach ($this->column_search_pos_dataposyandu as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_pos_dataposyandu) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_dataposyandu[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_dataposyandu)) {
            $order = $this->order_post_dataposyandu;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    // user get 
    private function _get_datatables_query_post_datauser()
    {
        $this->db->select('*');
        $this->db->from($this->_user);
        $this->db->order_by('username ASC');
        $i = 0;

        foreach ($this->column_search_pos_datauser as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_pos_datauser) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_datauser[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_datauser)) {
            $order = $this->order_post_datauser;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    //edu get

    private function _get_datatables_query_post_dataedukasi()
    {
        $this->db->select('*');
        $this->db->from($this->_edukasi);
        $this->db->order_by('nama_edukasi ASC');
        $i = 0;

        foreach ($this->column_search_pos_dataedukasi as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_pos_dataedukasi) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_dataedukasi[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_dataedukasi)) {
            $order = $this->order_post_dataedukasi;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    //kecamatan get
    private function _get_datatables_query_post_kecamatan()
    {
        $this->db->select('*');
        $this->db->from($this->_kecamatan);
        $this->db->order_by('kecamatan ASC');
        $i = 0;

        foreach ($this->column_search_pos_datakecamatan as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_pos_datakecamatan) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_datakecamatan[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_datakecamatan)) {
            $order = $this->order_post_datakecamatan;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    //

    function get_datatables_post_dataposyandu()
    {
        $this->_get_datatables_query_post_dataposyandu();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    // user
    function get_datatables_post_datauser()
    {
        $this->_get_datatables_query_post_datauser();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    //edu
    function get_datatables_post_dataedukasi()
    {
        $this->_get_datatables_query_post_dataedukasi();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    //kecamatan
    function get_datatables_post_datakecamatan()
    {
        $this->_get_datatables_query_post_datakecamatan();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    //

    function count_filtered_post_dataposyandu()
    {
        $this->_get_datatables_query_post_dataposyandu();
        $query = $this->db->get();
        return $query->num_rows();
    }
    // user
    function count_filtered_post_datauser()
    {
        $this->_get_datatables_query_post_datauser();
        $query = $this->db->get();
        return $query->num_rows();
    }
    // edu
    function count_filtered_post_dataedukasi()
    {
        $this->_get_datatables_query_post_dataedukasi();
        $query = $this->db->get();
        return $query->num_rows();
    }
    //kecamatan
    function count_filtered_post_datakecamatan()
    {
        $this->_get_datatables_query_post_datakecamatan();
        $query = $this->db->get();
        return $query->num_rows();
    }


    //

    public function count_all_post_dataposyandu()
    {
        $this->db->from($this->_posyandu);
        return $this->db->count_all_results();
    }
    //
    public function count_all_post_datauser()
    {
        $this->db->from($this->_user);
        return $this->db->count_all_results();
    }

    //
    public function count_all_post_dataedukasi()
    {
        $this->db->from($this->_edukasi);
        return $this->db->count_all_results();
    }

    ///
    public function count_all_post_datakecamatan()
    {
        $this->db->from($this->_kecamatan);
        return $this->db->count_all_results();
    }


    //

    //Datatables Riwayat Imunisasi
    private $column_order_post_riwayat = array(null, 'nama_vaksin',  'tanggal_vaksin'); //field yang ada di table user
    private $column_search_post_riwayat = array('nama_vaksin',  'tanggal_vaksin'); //field yang diizin untuk pencarian 
    private $order_post_riwayat = array('tanggal_vaksin' => 'desc'); // default order 

    private function _get_datatables_query_post_riwayat()
    {
        $this->db->select('*');
        $this->db->from($this->_vaksin);
        $this->db->where('id_balita', $this->input->post("id"));
        $this->db->order_by('tanggal_vaksin DESC');
        $i = 0;

        foreach ($this->column_search_post_riwayat as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_post_riwayat) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_riwayat[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_riwayat)) {
            $order = $this->order_post_riwayat;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables_post_riwayat()
    {
        $this->_get_datatables_query_post_riwayat();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_post_riwayat()
    {
        $this->_get_datatables_query_post_riwayat();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_post_riwayat()
    {
        $this->db->from($this->_campaign);
        return $this->db->count_all_results();
    }


    //Datatables Data Imunisasi Lengkap
    private $column_order_post_lengkap = array(null, 'nama_balita',  'nama_ibu', 'nama_ayah', 'tanggal_lahir', 'jenis_kelamin'); //field yang ada di table user
    private $column_search_post_lengkap = array('nama_balita',  'nama_ibu', 'nama_ayah', 'tanggal_lahir', 'jenis_kelamin'); //field yang diizin untuk pencarian 
    private $order_post_lengkap = array('date' => 'desc'); // default order 

    private function _get_datatables_query_post_lengkap()
    {
        $this->db->select('*');
        $this->db->from($this->_balita);
        $this->db->join('vaksinasi', 'vaksinasi.id_balita = data_balita.id_balita');
        $this->db->where('nama_vaksin', 'CAMPAK/MR 1');
        $this->db->order_by('vaksinasi.id_balita DESC');
        $i = 0;

        foreach ($this->column_search_post_lengkap as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_post_lengkap) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_lengkap[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_lengkap)) {
            $order = $this->order_post_lengkap;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables_post_lengkap()
    {
        $this->_get_datatables_query_post_lengkap();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_post_lengkap()
    {
        $this->_get_datatables_query_post_lengkap();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_post_lengkap()
    {
        $this->db->from($this->_campaign);
        return $this->db->count_all_results();
    }

    //Datatables Data Balita
    private $column_order_post_timbangan = array(null, 'nama_balita',  'nama_ibu', 'nama_ayah', 'tanggal_lahir', 'jenis_kelamin'); //field yang ada di table user
    private $column_search_post_timbangan = array('nama_balita',  'nama_ibu', 'nama_ayah', 'tanggal_lahir', 'jenis_kelamin'); //field yang diizin untuk pencarian 
    private $order_post_timbangan = array('date' => 'desc'); // default order 

    private function _get_datatables_query_post_timbangan()
    {
        $this->db->select('*');
        $this->db->from($this->_balita);
        $this->db->join('timbangan', 'timbangan.id_balita = data_balita.id_balita');
        $this->db->where('timbangan.id_balita', $this->input->post("id"));
        $this->db->order_by('timbangan.id_timbangan DESC');
        $i = 0;

        foreach ($this->column_search_post_timbangan as $item) // looping awal
        {
            if (isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_post_timbangan) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order_post_timbangan[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_post_timbangan)) {
            $order = $this->order_post_timbangan;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables_post_timbangan()
    {
        $this->_get_datatables_query_post_timbangan();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered_post_timbangan()
    {
        $this->_get_datatables_query_post_timbangan();
        $query = $this->db->get();
        return $query->num_rows();
    }

    

    public function count_all_post_timbangan()
    {
        $this->db->from($this->_campaign);
        return $this->db->count_all_results();
    }

    //SIMPAN DATA BALITA
    public function simpan_data_balita()
    {
        $post = $this->input->post();

        $this->id_balita = NULL;
        $this->nama_balita = $post["nama_lengkap"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->no_hp = $post["no_hp"];
        $this->kecamatan = $post["kecamatan"];
        $this->posyandu = $post["kategori_posyandu"];
        $this->date = date("Y-m-d");
        if ($this->db->insert($this->_balita, $this)) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
        echo json_encode($output);
    }

    //SIMPAN DATA POSYANDU
    public function simpan_data_posyandu()
    {
        $post = $this->input->post();

        $this->id_posyandu = NULL;
        $this->nama_posyandu = $post["nama_posyandu"];
        if ($this->db->insert($this->_posyandu, $this)) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
        echo json_encode($output);
    }

    public function simpan_data_user()
    {
        $post = $this->input->post();

        $this->id_user = NULL;
        $this->username = $post["username"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->level = $post["level"];
        
        if ($this->db->insert($this->_user, $this)) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
        echo json_encode($output);
    }


    public function simpan_data_edukasi()
    {
        $post = $this->input->post();

        $this->id_edukasi = NULL;
        $this->nama_edukasi = $post["nama_edukasi"];
        $this->link_youtube = $post["link_youtube"];
        
        if ($this->db->insert($this->_edukasi, $this)) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
        echo json_encode($output);
    }

    //SIMPAN RIWAYAT IMUNISASI
    public function simpan_riwayat_imunisasi()
    {
        $post = $this->input->post();
        $this->id_vaksinasi = NULL;
        $this->id_balita = $post["id_balita"];
        $this->nama_vaksin = $post["nama_vaksin"];
        $this->usia_bulan = $post["usia_bulan"];
        $this->tanggal_vaksin = $post["tanggal_vaksin"];
        if ($this->db->insert($this->_vaksin, $this)) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
            // $this->update_date($post["id_balita"], $post["tanggal_vaksin"]);
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
        echo json_encode($output);
    }

    public function simpan_edit_balita()
    {
        $post = $this->input->post();
     //   $this->id_balita = $post["id_balita"];
        $this->nama_balita = $post["nama_balita"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->kecamatan = $post["kecamatan"];
        $this->no_hp = $post["no_hp"];
        $this->posyandu = $post["posyandu"];
        
        
        $this->db->where('id_balita', $post["id_balita"]);
        if ($this->db->update($this->_balita, $this)) {
            //$this->update_date($post["id_balita"]);
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
            
            // $this->update_date($post["id_balita"], $post["tanggal_vaksin"]);
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
       
        echo json_encode($output);
    }


    public function simpan_edit_user()
    {
        $post = $this->input->post();

        
     //   $this->id_balita = $post["id_balita"];
        $this->username = $post["username"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->level = $post["level"];
        if ($post["password"] != null) {
            $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        }
        
        
        $this->db->where('id_user', $post["id_user"]);
        if ($this->db->update($this->_user, $this)) {
            //$this->update_date($post["id_balita"]);
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
            
            // $this->update_date($post["id_balita"], $post["tanggal_vaksin"]);
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
       
        echo json_encode($output);
    }

    public function simpan_edit_edukasi()
    {
        $post = $this->input->post();

        
     //   $this->id_balita = $post["id_balita"];
        $this->nama_edukasi = $post["nama_edukasi"];
        $this->link_youtube = $post["link_youtube"];
       
        
        $this->db->where('id_edukasi', $post["id_edukasi"]);
        if ($this->db->update($this->_edukasi, $this)) {
            //$this->update_date($post["id_balita"]);
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
            
            // $this->update_date($post["id_balita"], $post["tanggal_vaksin"]);
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
       
        echo json_encode($output);
    }

    public function simpan_edit_posyandu()
    {
        $post = $this->input->post();

        
     //   $this->id_balita = $post["id_balita"];
        $this->nama_posyandu = $post["nama_posyandu"];
       
        
        $this->db->where('id_posyandu', $post["id_posyandu"]);
        if ($this->db->update($this->_posyandu, $this)) {
            //$this->update_date($post["id_balita"]);
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
            
            // $this->update_date($post["id_balita"], $post["tanggal_vaksin"]);
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
       
        echo json_encode($output);
    }
    //SIMPAN RIWAYAT TIMBANGAN
    public function simpan_riwayat_berat_badan()
    {
        $post = $this->input->post();
        $this->id_timbangan = NULL;

        // Perhitungan Status Gizi
        $tb_m = $post["tinggi_badan"] / 100; // tb dikonversi dari cm ke m
        $perhitungan_imt = $post["berat_badan"] / ($tb_m * $tb_m); // imt anak = bb : tb^2
        $id = $post["id_balita"];
        $umur = $post["usia"];
        $check_jk = $this->db->query("SELECT jenis_kelamin  FROM `data_balita` WHERE id_balita = $id")->row()->jenis_kelamin;
        if($check_jk == "Perempuan"){
        $data_gizi =  $this->db->query("SELECT median FROM `gizilk`WHERE umur = $umur")->row()->median;
        $min_satu = $this->db->query("SELECT min_satu FROM `gizilk`WHERE umur = $umur")->row()->min_satu;
        $plus_satu = $this->db->query("SELECT plus_satu FROM `gizilk`WHERE umur = $umur")->row()->plus_satu;
        $hasil = ($perhitungan_imt - $data_gizi);
        
        
            if($hasil < 0 ){
                $hasil =  $hasil / ($data_gizi - $min_satu);
            }else{
                $hasil = $hasil / ($plus_satu - $data_gizi);
            }
                $hasil;
            if ($hasil < -3) {
                $data_input['status'] = 'Gizi Buruk (Severely Wasted)';
                $data_input['saran'] = 'Perlu menjalani rawat inap';
            } else if ($hasil >= -3 && $hasil < -2) {
                $data_input['status'] = 'Gizi Kurang (Wasted)';
                $data_input['saran'] = 'Memperbanyak konsumsi buah dan sayuran';
            } else if ($hasil >= -2 && $hasil <= 1) {
                $data_input['status'] = 'Gizi Baik (Normal)';
                $data_input['saran'] = 'Pertahankan';
            } else if ($hasil > 1 && $hasil <= 2) {
                $data_input['status'] = 'Beresiko Overweight';
                $data_input['saran'] = 'Meningkatkan aktivitas fisik dan batasi jam tidur';
            } else if ($hasil > 2 && $hasil <= 3) {
                $data_input['status'] = 'Gizi Lebih (Overweight)';
                $data_input['saran'] = 'kurangi karbohidrat dan perbanyak sayuran, onsumsi makanan berprotein';
            } else if ($hasil > 3) {
                $data_input['status'] = 'Obesitas';
                $data_input['saran'] = 'Lakukan aktivitas fisik selama 1 jam setiap harinya';
            }
            $data_input['hasil'] = $hasil;
        }else{
            $data_gizi =  $this->db->query("SELECT median FROM `gizilk`WHERE umur = $umur")->row()->median;
            $min_satu = $this->db->query("SELECT min_satu FROM `gizilk`WHERE umur = $umur")->row()->min_satu;
            $plus_satu = $this->db->query("SELECT plus_satu FROM `gizilk`WHERE umur = $umur")->row()->plus_satu;
            $hasil = ($perhitungan_imt - $data_gizi);
            if($hasil < 0 ){
                $hasil =  $hasil / ($data_gizi - $min_satu);
            }else{
                $hasil = $hasil / ($plus_satu - $data_gizi);
               
            }
            $hasil;
            if ($hasil < -3) {
                $data_input['status'] = 'Gizi Buruk (Severely Wasted)';
                $data_input['saran'] = 'Perlu menjalani rawat inap';
            } else if ($hasil >= -3 && $hasil < -2) {
                $data_input['status'] = 'Gizi Kurang (Wasted)';
                $data_input['saran'] = 'Memperbanyak konsumsi buah dan sayuran';
            } else if ($hasil >= -2 && $hasil <= 1) {
                $data_input['status'] = 'Gizi Baik (Normal)';
                $data_input['saran'] = 'Pertahankan';
            } else if ($hasil > 1 && $hasil <= 2) {
                $data_input['status'] = 'Beresiko Overweight';
                $data_input['saran'] = 'Meningkatkan aktivitas fisik dan batasi jam tidur';
            } else if ($hasil > 2 && $hasil <= 3) {
                $data_input['status'] = 'Gizi Lebih (Overweight)';
                $data_input['saran'] = 'kurangi karbohidrat dan perbanyak sayuran, onsumsi makanan berprotein';
            } else if ($hasil > 3) {
                $data_input['status'] = 'Obesitas';
                $data_input['saran'] = 'Lakukan aktivitas fisik selama 1 jam setiap harinya';
            }
            $data_input['hasil'] = $hasil;
        }

        $data_input['id_balita'] = $post["id_balita"];
        $data_input['berat_badan'] = $post["berat_badan"];
        $data_input['tinggi_badan'] = $post["tinggi_badan"];
        $data_input['usia_timbang'] = $post["usia"];
        $data_input['tanggal_timbang'] = $post["tanggal_sekarang"];
        if ($this->db->insert($this->_timbang, $data_input)) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
                "type" => "success"
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
                "type" => "error"
            );
        }
         echo json_encode($output);
    }


    //DELETE DATA BALITA
    public function delete_data_balita()
    {

        $post = $this->input->post();
        $id = $post["id"];
        if ($this->db->delete($this->_balita, array("id_balita" => $id))) {
            $output = array(
                "error_code" => $this->security->get_csrf_hash(),
                "message" => "success",
            );
        } else {
            $output = array(
                "error_code" => $this->security->get_csrf_hash(),
                "message" => "failed",
            );
        }
        echo json_encode($output);
    }

    //DELETE DATA POSYANDU
    public function delete_data_posyandu()
    {

        $post = $this->input->post();
        $id = $post["id"];
        if ($this->db->delete($this->_posyandu, array("id_posyandu" => $id))) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
            );
        }
        echo json_encode($output);
    }

    public function delete_data_user()
    {

        $post = $this->input->post();
        $id = $post["id"];
        if ($this->db->delete($this->_user, array("id_user" => $id))) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
            );
        }
        echo json_encode($output);
    }

    public function delete_data_edukasi()
    {

        $post = $this->input->post();
        $id = $post["id"];
        if ($this->db->delete($this->_edukasi, array("id_edukasi" => $id))) {
            $output = array(
                "error_code" => 0,
                "message" => "success",
            );
        } else {
            $output = array(
                "error_code" => 2,
                "message" => "failed",
            );
        }
        echo json_encode($output);
    }

    //CARI BALITA PELAYANAN IMUNISASI
    public function cari_balita($q)
    {
        $this->load->database();
        if (!empty($q)) {
            $this->db->like('nama_balita', $q);
            $query = $this->db->select("id_balita as id, concat(nama_balita ,' - ',nama_ibu) as text")
                ->limit(10)
                ->get($this->_balita);
            $json = $query->result();
        } else {
            $query = $this->db->select("id_balita as id, concat(nama_balita ,' - ',nama_ibu) as text")
                ->limit(10)
                ->get($this->_balita);
            $json = $query->result();
        }
        echo json_encode($json);
    }

    public function ambil_data_balita()
    {
        $post = $this->input->post();
        $this->db->select('*');
        $this->db->from($this->_balita);
        $this->db->where('id_balita', $post['id']);
        echo json_encode($this->db->get()->row());
    }


    //LAPORAN BULANAN
    public function laporan_bulan()
    {
    }

    //data 
}
