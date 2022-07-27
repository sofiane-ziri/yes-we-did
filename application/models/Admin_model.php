<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
//		$this->load->library('security');
	}
	
	public function get_all_accueil(){
		$this->db->select('*');
		$this->db->from('accueil');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function update_accueil($id, $data_accueil){
		$data = array(
			'iframe' => $data_accueil['iframe'],
			'image'  => $data_accueil['image'],
			'description_image'  => $data_accueil['description_image'],
			'titre_image'=>$data_accueil['titre_image'],
			'paragraphe_image'=>$data_accueil['paragraphe_image'],

		);
		$this->db->where('id', $id);
		$this->db->update('accueil', $data);
	}
	public function delete_accueil($id){
		$this->db->where('id', $id);
		$this->db->delete('accueil');
	}
	public function add_accueil($data_accueil){
		$data = array(
			'iframe' => $data_accueil['iframe'],
			'image'  => $data_accueil['image'],
			'description_image'  => $data_accueil['description_image'],
			'titre_image'=>$data_accueil['titre_image'],
			'paragraphe_image'=>$data_accueil['paragraphe_image'],

		);

		$this->db->insert('accueil', $data);
	}
}
