<?php

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    //Login
    public function index(){
		$this->load->view('dashboard/login');	
    }

    //Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

}