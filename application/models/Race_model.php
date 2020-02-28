<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Race_model extends CI_Model {
	
	private $table = "voltas";

	public function salvar($data) {
				
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
		
	}

	public function listar() {
		
		return $this->db->get($this->table)->result_array();
		
	}
	
	public function listar_piloto(){
			
		$this->db->select("c.cod_piloto, c.piloto");
		$this->db->from($this->table." as c");
		$this->db->limit(5);
        return $this->db->get()->result_array();
		
	}
	
	public function melhor_volta(){
		
		$this->db->select_min("c.tempo");
		$this->db->select("c.piloto, c.cod_piloto, c.num_volta");
		$this->db->from($this->table." as c");
		return $this->db->get()->result_array();
		
	}
	
	public function vencedor(){
		
		$this->db->select_avg("c.tempo");
		$this->db->select("c.piloto, c.num_volta");
		$this->db->from($this->table." as c");
		return $this->db->get()->result_array();
		
	}
	
	public function dados_piloto($id){
			
		$this->db->select("c.cod_piloto, c.piloto, c.num_volta, c.tempo, c.vlc_media");
		$this->db->from($this->table." as c");
		$this->db->where("c.cod_piloto", $id);
        return $this->db->get()->result_array();
		
	}
	
}