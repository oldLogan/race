<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function index()
	{
		$usuarioLogado = $this->session->userdata("user_auth");

		$this->load->model("clientes_model");
		$cliente_produto = $this->clientes_model->listarProdutosPorCliente($usuarioLogado["id"]);
		// $cliente_servico = $this->clientes_model->listarServicosPorCliente($usuarioLogado["id"]);

		$this->load->model("instrutor_model");
		$instrutores = $this->instrutor_model->listaPorEmpresa($usuarioLogado["id"]);

		$this->load->model("empresa_veiculos_model");
		$veiculos = $this->empresa_veiculos_model->listaPorEmpresa($usuarioLogado["id"]);

		$dados = array('cliente_produto' => $cliente_produto, 'instrutores' => $instrutores, 'veiculos' => $veiculos, 'id_cliente' => $usuarioLogado["id"]);
		$this->load->templateUser('dashboard', $dados);
	}

	public function formulario(){
		$this->load->templateUser('formulario');
	}
}
