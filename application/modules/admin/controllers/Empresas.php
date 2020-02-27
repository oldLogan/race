<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends MX_Controller {

	function __construct()
    {
		parent::__construct();
	}

    public function listar(){
        $this->load->model("empresas_model");
        $empresas = $this->empresas_model->listar();
        $dados = array("empresas" => $empresas);

        $this->load->templateAdmin('empresas/listar', $dados);
    }

	public function formulario($id = null){
		$this->load->model("empresas_model");
		$this->load->model("estados_model");

		$empresa_tipo = $this->empresas_model->listaTipos();
        $estados = $this->estados_model->lista();

        $dados = array("empresa_tipo" => $empresa_tipo, "estados" => $estados);
        if(!empty($id)){
            $empresa = $this->empresas_model->buscaPorId($id);
            $dados['empresa'] = $empresa;
        }
		
		$this->load->templateAdmin('empresas/formulario', $dados);
    } 
    
	public function gravar(){
		$empresa = array(
			'id_empresa_tipo' => $this->input->post("empresa_tipo"),
			'nome' => $this->input->post("nome"),
			'nomefantasia' => $this->input->post("nomefantasia"),
			'descricao' => $this->input->post("descricao"),
			'email' => $this->input->post("email"),
			'telefone' => $this->input->post("telefone"),
			'celular' => $this->input->post("celular"),
			'endereco' => $this->input->post("endereco"),
			'cep' => $this->input->post("cep"),
			'bairro' => $this->input->post("bairro"),
			'cidade' => $this->input->post("cidade"),
			'id_estado' => $this->input->post("estado"),
			'login' => $this->input->post("login"),
			'senha' => $this->input->post("senha"),
        );
        if(!empty($this->input->post("id"))){
            $empresa['id'] = $this->input->post("id");
            $msg = "Empresa atualizada com sucesso";
        }
        $msg = "Empresa cadastrada com sucesso";

		$this->load->model("empresas_model");
	    if($this->empresas_model->salvar($empresa)){
            $this->session->set_flashdata("success", $msg);
        }else{
            $this->session->set_flashdata("danger", "Ocorreu um erro ao salvar a empresa");
        }

	    redirect("/admin/empresas/listar");
	}      
    
    public function deletar($id){
        $this->load->model("empresas_model");
        $this->load->model("empresa_produtos_model");

        //if($this->empresa_produtos_model->deletarPorIdEmpresa($id))
            $this->empresas_model->deletar($id);

        redirect("/admin/empresas/listar");
    }    
	
}
