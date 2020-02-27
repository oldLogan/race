<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends MX_Controller {

	function __construct()
    {
		parent::__construct();
	}
	
	public function listar(){
        $this->load->model("clientes_model");
        $clientes = $this->clientes_model->listar();
        $dados = array("clientes" => $clientes);
        
        $this->load->templateAdmin('clientes/listar', $dados);
		
    }
	
	public function relatorio(){
        $this->load->model("clientes_model");
        $clientes = $this->clientes_model->listarClientes_Pacotes_Empresa();
        $dados = array("clientes" => $clientes);
        
		$this->load->templateAdmin('clientes/relatorio', $dados);
		//;var_dump($dados); die;
    }
    
}