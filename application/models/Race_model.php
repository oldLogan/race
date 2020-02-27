<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Race_model extends CI_Model {
	
	private $table = "voltas";

	public function listar() {
		return $this->db->get($this->table)->result_array();
	}
	
	/*public function listarComProdutos() {
		$this->db->select("e.id as id_empresa, e.nomefantasia, e.descricao as empre_descr, p.titulo, p.descricao, ep.valor, p.id");
		$this->db->from($this->table." as e");
		$this->db->join("empresa_produto as ep", "ep.id_empresa = e.id and ep.ativado = 1");
		$this->db->join("produto as p", "p.id = ep.id_produto and p.ativado = 1");
		$this->db->where("e.ativado", 1 );
        return $this->db->get()->result_array();
	}
	
		
	public function listarPorFiltro($filtro){
		$this->db->select("e.id, es.id as id_empresa_servico, e.nomefantasia, s.titulo, s.descricao, es.valor");
		$this->db->from($this->table." as e");
		$this->db->join("empresa_produto_servico as es", "es.id_empresa_produto = e.id and es.ativado = 1");
		$this->db->join("servico as s", "s.id = es.id_servico and s.ativado = 1");
		$this->db->join("empresa_produto as ep", "ep.id_empresa = es.id_empresa_produto and es.ativado = 1");
		// $this->db->where("e.id_empresa_tipo", $filtro["id_empresa_tipo"]);
		//if($filtro["id_servico"] != "0")
			$this->db->where("s.id", $filtro["id_servico"]);
		// $this->db->where("e.id_bairro", $filtro["id_bairro"]);
		 $this->db->where("e.id_cidade", $filtro["id_cidade"]);
		 $this->db->where("e.id_estado", $filtro["id_estado"]);
		$this->db->where("e.ativado", 1);
        return $this->db->get()->result_array();	
	}

		public function listaProdServEmpr($idpr){
		$this->db->select("e.id, es.id as id_empresa_servico, e.nomefantasia, s.titulo, s.descricao, es.valor");
		$this->db->from($this->table." as e");
		$this->db->join("empresa_produto_servico as es", "es.id_empresa_produto = e.id and es.ativado = 1");
		$this->db->join("servico as s", "s.id = es.id_servico and s.ativado = 1");
		$this->db->join("empresa_produto as ep", "ep.id_empresa = es.id_empresa_produto and es.ativado = 1");
		$this->db->where("es.id_produto", $idpr["id_produto"]);
		$this->db->where("e.ativado", 1);
        return $this->db->get()->result_array();		
	}


    public function salvar($empresa) {
		$this->load->model("estados_model");
		$id_cidade = $this->estados_model->gravarCidade($empresa["cidade"], $empresa["id_estado"]);
		$id_bairro = $this->estados_model->gravarBairro($empresa["bairro"], $id_cidade);

		$empresa['id_bairro'] = $id_bairro;
		$empresa['id_cidade'] = $id_cidade;
		if(!empty($empresa['senha']))
			$empresa['senha'] = md5($empresa["senha"]);
		
			
		unset($empresa['bairro']);
		unset($empresa['cidade']);
		unset($empresa['ativado']);
		
		if(empty($empresa["id"])){
			$this->db->insert($this->table, $empresa);
			return $this->db->insert_id();
		}else{
			unset($empresa['login']);
			// unset($empresa['senha']);
			$this->db->where('id', $empresa["id"]);
			return $this->db->update($this->table, $empresa);
		}
    }
     
    public function buscaPorLoginESenha($login, $senha) {
	    $this->db->where("login", $login);
	    $this->db->where("senha", $senha);
	    return $this->db->get($this->table)->row_array();
	}

    public function buscaPorId($id) {
		$this->db->select("e.*, b.descricao as bairro, c.descricao as cidade");
		$this->db->from($this->table." as e");
		$this->db->join("bairros as b", "b.id = e.id_bairro and b.ativado = 1");
		$this->db->join("cidades as c", "c.id = e.id_cidade and c.ativado = 1");
		$this->db->where("e.id", $id);
	    return $this->db->get()->row_array();
	}

	public function empresaPorId($id) {
		$this->db->select("e.*, b.descricao as bairro, c.descricao as cidade");
		$this->db->from($this->table." as e");
		$this->db->join("bairros as b", "b.id = e.id_bairro and b.ativado = 1");
		$this->db->join("cidades as c", "c.id = e.id_cidade and c.ativado = 1");
		$this->db->where("e.id", $id);
	    return $this->db->get()->result_array();
	}
	
    public function buscaPorEmail($email) {
	    $this->db->where("email", $email);
		return $this->db->get($this->table)->row_array();
    }    	

    public function buscaPorProduto($id_produto) {
		$this->db->select("e.*");
		$this->db->from($this->table." as e");
		$this->db->join("empresa_servico es", "es.id_empresa = e.id and es.ativado = 1");
		$this->db->join("produto_servico ps", "ps.id_servico = es.id_servico and ps.ativado = 1");
		$this->db->join("produto as p", "p.id = ps.id_produto and p.ativado = 1");
		// $this->db->join("bairros as b", "b.id = e.id_bairro and b.ativado = 1");
		// $this->db->join("cidades as c", "c.id = e.id_cidade and c.ativado = 1");
		$this->db->where("p.id", $id_produto);
		$this->db->where("e.ativado", 1);
	    return $this->db->distinct()->get()->result_array();
	}

    public function buscaEmpresaProdutoPorProduto($id_produto) {
		$this->db->select("e.*, ep.id as id_empresa_produto, ep.valor, p.titulo");
		$this->db->from($this->table." as e");
		$this->db->join("empresa_produto ep", "ep.id_empresa = e.id and ep.ativado = 1");
		$this->db->join("produto as p", "p.id = ep.id_produto and p.ativado = 1");
		$this->db->where("p.id", $id_produto);
		$this->db->where("e.ativado", 1);
	    return $this->db->get()->result_array();
	}	
	
    public function buscaServicoPorEmpresa($id_empresa) {
		$this->db->select("*");
		$this->db->from("empresa_produto ep");
		$this->db->join("empresa_produto_servico ps", "ps.id_empresa_produto = ep.id and ps.ativado = 1");
		$this->db->where("ep.id_empresa", $id_empresa);
		$this->db->where("ep.ativado", 1);
	    return $this->db->get()->result_array();
	}		
	
	public function listaTipos(){
		return $this->db->get("empresa_tipo")->result_array();
	}


	public function deletar($id) {
		$empresa = $this->buscaPorId($id);
				
		$this->db->set('ativado', 0, FALSE);
		$this->db->where('id', $id);
		return $this->db->update($this->table);
		
	}

	public function verificaTemItemClinica($id_empresa_produto){
		$this->db->select("1 as result");
		$this->db->from("empresa_servico as ep");
		$this->db->join("produto_item as pi", "pi.id_produto = ep.id_produto and pi.ativado = 1");
		$this->db->where("ep.id", $id_empresa_produto);
		$this->db->where("ep.ativado", 1);
		$this->db->where("pi.id_item in (select id from item_produto where id_empresa_tipo = 2)");
	    return $this->db->get()->row_array();
	}

	public function salvarProdutoServico($lista_empresa_produto_servico){
        foreach ($lista_empresa_produto_servico as $empresa_produto_servico) {
            $this->db->insert("empresa_produto_servico", $empresa_produto_servico);
        }
	}
	
	*/
	
}