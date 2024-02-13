<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serverside extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('dashboard_model');
        if ($this->login_model->isNotLogin()) redirect(site_url('login'));
    }

    //Serverside List Data Balita
    public function list_data_balita()
    {
        $list = $this->dashboard_model->get_datatables_post_databalita();
        
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            //Menghitung Usia
            $lahir = new DateTime($field->tanggal_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($lahir);
            str_replace("Cempaka", "Nemu", $field->posyandu, $cari_cempaka);
            str_replace("Teratai", "Nemu", $field->posyandu, $cari_teratai);
            str_replace("Puskesmas", "Nemu", $field->posyandu, $cari_puskesmas);
            str_replace("Posyandu", "Nemu", $field->posyandu, $cari_posyandu);
            if ($cari_cempaka == 1) {
                $posyandu = '<span class="badge badge-pill badge-primary">' . $field->posyandu . '</span>';
            } elseif ($cari_teratai == 1) {
                $posyandu = '<span class="badge badge-pill badge-warning">' . $field->posyandu . '</span>';
            }elseif ($cari_puskesmas == 1) {
                $posyandu = '<span class="badge badge-pill badge-danger">' . $field->posyandu . '</span>';
            }elseif ($cari_posyandu == 1) {
                $posyandu = '<span class="badge badge-pill badge-info">' . $field->posyandu . '</span>';
            }
            /////////////////////////////////
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_balita;
            $row[] = $field->nama_ibu;
            $row[] = $field->jenis_kelamin;
            $row[] = $field->tanggal_lahir;
            $row[] = $umur->y . " Tahun " . $umur->m . " Bulan " . $umur->d . " Hari";
            $row[] = $field->kecamatan;
            $row[] = $posyandu;
            $row[] = '<a href="' . site_url() . 'details/' . $field->id_balita . '" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> <a href="' . site_url() . 'edit_balita/' . $field->id_balita . '" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a> </button> <button class="deletebalita btn btn-danger btn-sm" type="button" id="' . $field->id_balita . '"><i class="fa fa-trash"></i></button>';

            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_databalita(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_databalita(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    //Serverside List Data Posyandu
    public function list_data_posyandu()
    {
        $list = $this->dashboard_model->get_datatables_post_dataposyandu();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            /////////////////////////////////
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_posyandu;
            $row[] = ' <a href="' . site_url() . 'edit_posyandu/' . $field->id_posyandu . '" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a> <button class="deletebalita btn btn-danger btn-sm" type="button" id="' . $field->id_posyandu . '"><i class="fa fa-trash"></i></button>';
            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_dataposyandu(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_dataposyandu(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function list_data_user()
    {
        $list = $this->dashboard_model->get_datatables_post_datauser();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            /////////////////////////////////
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->username;
            $row[] = $field->nama_lengkap;
            $row[] = $field->level;
            $row[] = ' <a href="' . site_url() . 'edit_user/' . $field->id_user . '" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a> <button class="deletebalita btn btn-danger btn-sm" type="button" id="' . $field->id_user . '"><i class="fa fa-trash"></i></button>';
            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_datauser(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_datauser(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }


    //edu
    public function list_data_edukasi()
    {
        $list = $this->dashboard_model->get_datatables_post_dataedukasi();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            /////////////////////////////////
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_edukasi;
            $row[] = ' <a href="'.$field->link_youtube.'">Lihat Materi</a>';
            $row[] = ' <a href="' . site_url() . 'edit_edukasi/' . $field->id_edukasi . '" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a> <button class="deletebalita btn btn-danger btn-sm" type="button" id="' . $field->id_edukasi . '"><i class="fa fa-trash"></i></button>';
            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_dataedukasi(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_dataedukasi(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    //Serverside List Data Balita
    public function list_riwayat_imunisasi()
    {
        $list = $this->dashboard_model->get_datatables_post_riwayat();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_vaksin;
            $row[] = $field->tanggal_vaksin;
            $row[] = '<span class="badge badge-pill badge-success">Selesai</span>';
            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_riwayat(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_riwayat(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    //Serverside List Data Balita Imunisasi Lengkap
    public function list_data_lengkap()
    {
        $list = $this->dashboard_model->get_datatables_post_lengkap();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            //Menghitung Usia
            $lahir = new DateTime($field->tanggal_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($lahir);
            /////////////////////////////////
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_balita;
            $row[] = $field->nama_ibu;
            $row[] = $field->nama_ayah;
            $row[] = $field->jenis_kelamin;
            $row[] = $field->tanggal_lahir;
            $row[] = $umur->y . " Tahun " . $umur->m . " Bulan " . $umur->d . " Hari";
            $row[] = '<button class="view btn btn-info btn-sm" type="button"><i class="fa fa-eye"></i></button> <a target="_blank" href="' . base_url() . 'sertifikat/cetak_sertifikat/' . $field->id_balita . '"><button class="view btn btn-success btn-sm" type="button"><i class="fa fa-print"></i></button></a>';

            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_lengkap(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_lengkap(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function list_riwayat_timbangan()
    {
        $list = $this->dashboard_model->get_datatables_post_timbangan();
        
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            //Menghitung Usia
            $lahir = new DateTime($field->tanggal_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($lahir);
            /////////////////////////////////
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->usia_timbang . " Bulan";
            $row[] = $field->berat_badan . " Kg";
            $row[] = $field->tinggi_badan . " Cm";
            $row[] = $field->status;
            $row[] = $field->saran;
            $row[] = $field->tanggal_timbang;
            $data[] = $row;
        }

        $output = array(
            "error_code" => 0,
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dashboard_model->count_all_post_timbangan(),
            "recordsFiltered" => $this->dashboard_model->count_filtered_post_timbangan(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
