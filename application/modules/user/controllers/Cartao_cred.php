<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartao_cred extends MX_Controller {

    public function index(){
		$this->load->model("clientes_model");
		$this->load->model("produtos_model");
		$usuarioLogado = $this->session->userdata("user_auth"); //var_dump($usuarioLogado); die;
		
		
		//$dados['id'] = $_GET['id'];
		//$usuarioLogado['id']  = $_GET['id'];
		$dados['produtos'] = $this->clientes_model->listarProdutosPorCliente($usuarioLogado["id"]); //var_dump($dados); die;
				
		foreach($dados['produtos'] as $produto){ 
						
				$prodTitulo = $produto["titulo"]; 
				$valor = $produto["valor"]; 
				$chave = $produto["chave"];

				$prod['prodTitulo'] =  $prodTitulo;
				$prod['valor'] =  $valor;
				$prod['chave'] = $chave;
		
		}
		
		$dados = array('produto' => $produto);
		$this->load->templateUser('/pagamento/cartao_cred', $dados);
		
		
	}
	
	public function formulario(){
		$this->load->templateUser('formulario');
	}
	
}
