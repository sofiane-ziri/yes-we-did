<?php
class Accueil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
//		$this->load->model('admin_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->helper('url');
	}
    public function index()
    {
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('head.php');
        $this->load->view('header.php');
        $this->load->view('accueil.php');
    }
}
