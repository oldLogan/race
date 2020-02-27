<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function index()
	{
		$usuarioLogado = $this->session->userdata("user_auth");

		$this->load->model("instrutor_model");
		$instrutores = $this->instrutor_model->listaPorEmpresa($usuarioLogado["id"]);

		$this->load->model("empresa_veiculos_model");
		$veiculos = $this->empresa_veiculos_model->listaPorEmpresa($usuarioLogado["id"]);

		$dados = array('instrutores' => $instrutores, 'veiculos' => $veiculos);
		$this->load->templateEmpresa('dashboard', $dados);
	}

	public function formulario(){
		$this->load->templateEmpresa('formulario');
	}
}
