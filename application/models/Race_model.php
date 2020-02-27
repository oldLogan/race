<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Race_model extends CI_Model {
	
	private $table = "voltas";

	public function listar() {
		
		return $this->db->get($this->table)->result_array();
		
	}
	
	public function salvar($data) {
				
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
		
	}

	
}