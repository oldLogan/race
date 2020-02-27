<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagamento extends MX_Controller {

    public function index(){
		$this->load->model("clientes_model");
		$this->load->model("produtos_model");
		$usuarioLogado = $this->session->userdata("user_auth");
		
		$dados['id'] = $_GET['id'];
		$usuarioLogado['id']  = $_GET['id'];
		$dados['produtos'] = $this->clientes_model->listarProdutosPorCliente($usuarioLogado["id"]); //var_dump($dados); die;
				
		foreach($dados['produtos'] as $produto){ 
						
				$prodTitulo = $produto["titulo"]; 
				$valor = $produto["valor"]; 
				$chave = $produto["chave"];

				$prod['prodTitulo'] =  $prodTitulo;
				$prod['valor'] =  $valor;
				$prod['chave'] = $chave;
		
		}
		
		$chave = $prod['chave']; // var_dump($chave); die;
		$dados['servicos'] = $this->clientes_model->buscarProdutoServicosPorChave($chave); 
		
		foreach($dados['servicos'] as $servico){
			
				$nme_servico = $servico["titulo"]; 
				$id_serv = $servico["id_servico"];
				$vlr_serv = $servico['valor'];
				$tpo_empresa = $servico['id_empresa_tipo'];
			
			if(!isset($serv)){
				$serv[0]['nme_servico'] = $nme_servico;
				$serv[0]['id_serv'] = $id_serv;
				$serv[0]['vlr_serv'] = $vlr_serv;
				$serv[0]['tpo_empresa'] = $tpo_empresa;
				
			} else {
				array_push($serv, array('nme_servico' => $nme_servico, 'id_serv' => $id_serv, 'vlr_serv' => $vlr_serv, 'tpo_empresa' => $tpo_empresa)); 
				}
			
		}
		
		
		$dados = array('produto' => $produto, 'servico' => isset($serv)?$serv:null); //var_dump($dados); die;
		$this->load->templateUser('/pagamento/index', $dados);
	}
	
	public function formulario(){
		$this->load->templateUser('formulario');
	}
	
}
