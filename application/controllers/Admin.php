<?php
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$data['test']=$this->admin_model->get_all_accueil();
		$this->load->view('admin/index.php',$data);
	}
	public function crud_accueil($id){
		var_dump($this->input->post());
		if ($this->input->post('modifier')) {
			$this->admin_model->update_accueil($id, $this->input->post());
		}
		if($this->input->post('supprimer')) {
			$this->admin_model->delete_accueil($id);
		}

	}
	public function add_accueil(){
		$this->admin_model->add_accueil($this->input->post());

	}
	public function do_upload($id){
		$config['upload_path']          = "./css/image";
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['file_ext_tolower']		= TRUE;
		$config['remove_spaces'] 		= TRUE;
		$config['detect_mime']			= TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( !$this->upload->do_upload('userfile'))
		{
			
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{

			$data = array('upload_data' => $this->upload->data());
			$this->admin_model->change_image($this->upload->data('file_name'),$id);
//			redirect('/admin/dashboard_collaboration');
		}
	}
}
