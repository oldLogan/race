<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pilotos_model extends CI_Model {
    public $table = "pilotos";
	
	public function listar() {
        return $this->db->get($this->table)->result_array();
    }

   
    
    public function buscaPilotos() {
        $this->db->select("p.id_piloto, p.nme_piloto");
        $this->db->from($this->table." as p");
     	return $this->db->get()->row_array();
    }    

  

    /* public function listarProdutosPorCliente($id_cliente) {
        $this->db->from("cliente_produto cp");
        $this->db->join("produto as p", "p.id = cp.id_produto and p.ativado = 1");
        $this->db->where("cp.id_cliente", $id_cliente);
        return $this->db->get()->result_array();
    }
	
	
	public function listarClientes_Pacotes_Empresa() {
        $this->db->select("cps.id, cps.data, cl.nome, cps.chave, e.nomefantasia, pr.titulo, sr.id_empresa_tipo, cp.valor");
        $this->db->from("cliente_produto_servico cps");
        $this->db->join("empresa_produto_servico as eps", "eps.id = cps.id_empresa_produto_servico and eps.ativado = 1");
        $this->db->join("empresa_produto as ep", "ep.id = cps.id_empresa_produto and ep.ativado = 1");
        $this->db->join("empresa as e", "e.id = ep.id_empresa and e.ativado = 1");
		$this->db->join("servico AS sr", "sr.id = cps.id_servico");
		$this->db->join("produto AS pr", "pr.id = cps.id_produto");
		$this->db->join("cliente AS cl", "cl.id = cps.id_cliente");
		$this->db->join("cliente_produto AS cp", "cp.id_cliente = cl.id");
                
        
        $this->db->group_by("cps.chave", "asc");
        $this->db->order_by("cps.id", "asc");
        return $this->db->get()->result_array();
    }
	
	

      
    public function salvarClienteProduto($lista_cliente_produto, $id_produto, $id_cliente, $valor_total){
        $chave = $this->gerarChave();

        $cliente_produto = array(
            "id_cliente" => $id_cliente,
            "id_produto" => $id_produto,
            "chave" => $chave,
            "valor" => $valor_total
        );
        $this->db->insert("cliente_produto", $cliente_produto);
        $id_cliente_produto = $this->db->insert_id();

        foreach ($lista_cliente_produto as $item) {
            $id_empresa_produto = $item["id_empresa_produto"];
            $this->salvarClienteProdutoServico($id_empresa_produto, $id_cliente_produto, $chave, $id_cliente);

            $cliente_produto_pagamento = array(
                "chave" => $chave,
                "id_cliente_produto" => $id_cliente_produto,
                "id_empresa_produto" => $id_empresa_produto,
                "id_cliente" => $id_cliente,
                "valor" => $item["valor"]
            );
            
            $this->salvarClienteProdutoPagamento($cliente_produto_pagamento);
        }

    }*/

}