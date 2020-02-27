<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Informacoes extends MX_Controller {

	/*public function index(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("informacoes_model");
		$empresa_produtos = $this->informacoes_model->listaPorEmpresa($usuarioLogado["id"]);

		$dados = array('empresa_produtos' => $empresa_produtos);
		$this->load->templateEmpresa('/servicos/index', $dados);
	}*/

	public function formulario(){
        //$usuarioLogado = $this->session->userdata("user_auth");
        $this->load->model("informacoes_model");
        $produtos = $this->informacoes_model->buscaProdutosDisponiveisPorIdEmpresa($usuarioLogado["id"]);
        
        $dados = array('produtos' => $produtos, "usuariologado" => $usuarioLogado);
		$this->load->templateEmpresa('/servicos/formulario', $dados);
	}

	

  
}

?>