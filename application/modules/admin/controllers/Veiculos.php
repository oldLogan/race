<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends MX_Controller {

	function __construct()
    {
		parent::__construct();
	}

	public function listar(){
        $this->load->model("veiculos_model");
        $veiculos = $this->veiculos_model->lista();
        $dados = array("veiculos" => $veiculos);
        
        $this->load->templateAdmin('veiculos/listar', $dados);
    }    
    
    public function formulario(){
        $this->load->model("veiculos_model");
        $veiculo_tipo = $this->veiculos_model->listaTipos();
        $dados = array("veiculo_tipo" => $veiculo_tipo);
        
        $this->load->templateAdmin('veiculos/formulario', $dados);
    }

    public function gravar(){
        $this->load->model("veiculos_model");

		
        $veiculo = array(
            'veiculo_tipo' => $this->input->post("veiculo_tipo"),
            'modelo' => $this->input->post("modelo"),
            'ano' => $this->input->post("ano")
        );
		
		$this->veiculos_model->salvar($veiculo);
        redirect("/admin/veiculos/listar");
    }
}



       