<?php
class Accueil extends CI_Controller {
    public function index()
    {
        $this->load->view('header.php');
        $this->load->view('accueil.php');
    }
}
