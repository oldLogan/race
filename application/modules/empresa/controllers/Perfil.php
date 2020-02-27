<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends MX_Controller {

	public function dados()
	{
		$usuarioLogado = $this->session->userdata("user_auth");

        $this->load->model("empresas_model");
        $this->load->model("estados_model");

        $tipo_empresa = $this->empresas_model->listaTipos();
        $estados = $this->estados_model->lista();
		$empresa = $this->empresas_model->buscaPorId($usuarioLogado["id"]);

		$dados = array('empresa' => $empresa, "estados" => $estados, "tipo_empresa" => $tipo_empresa);
		$this->load->templateEmpresa('perfil/dados', $dados);
    }
    
    public function gravar(){
		$empresa = array(
            'id' => $this->input->post("id"),
            'nome' => $this->input->post("nome"),
			'nomefantasia' => $this->input->post("nomefantasia"),
			'cnpj' => $this->input->post("cnpj"),
			'razaosocial' => $this->input->post("razaosocial"),
			'inscricao_estadual' => $this->input->post("inscricao_estadual"),
			'representante' => $this->input->post("representante"),
			'descricao' => $this->input->post("descricao"),
			'email' => $this->input->post("email"),
			'telefone' => $this->input->post("telefone"),
			'celular' => $this->input->post("celular"),
			'endereco' => $this->input->post("endereco"),
			'cep' => $this->input->post("cep"),
			'bairro' => $this->input->post("bairro"),
			'cidade' => $this->input->post("cidade"),
			'id_estado' => $this->input->post("estado"),
			'localizacao' => $this->input->post("localizacao")
        );
        unset($empresa['senha']);

        $this->load->model("empresas_model");
	    if($this->empresas_model->salvar($empresa)){
            $this->session->set_flashdata("success", "Empresa atualizada com sucesso");
            $empresa["tipologin"] = "empresa";
            $this->session->set_userdata("user_auth", $empresa);
        }else{
            $this->session->set_flashdata("danger", "Não foi possí­vel atualizar a empresa");
        }

        redirect("/empresa/perfil/dados");
    }
}
