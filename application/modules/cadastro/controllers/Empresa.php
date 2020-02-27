<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends MX_Controller {
    
	public function formulario()
	{
		$this->load->model("empresas_model");
		$this->load->model("estados_model");

		$tipo_empresa = $this->empresas_model->listaTipos();
		$estados = $this->estados_model->lista();

		$dados = array("tipo_empresa" => $tipo_empresa, "estados" => $estados);
		
		$this->load->template('empresa/formulario', $dados);
	}
	
	
	public function gravar(){
		
		$empresa = array(
			'id_empresa_tipo' => $this->input->post("tipo_empresa"),
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
			'localizacao' => $this->input->post("localizacao"),
			'login' => $this->input->post("login"),
			'senha' => $this->input->post("senha")

		);
		
		$nmefantasia = $this->input->post("nomefantasia");
		$imagem    = $_FILES['imagem'];
		$configuracao = array(
			'upload_path'   => './imagens/',
			'allowed_types' => 'jpg',
			'file_name'     => $nmefantasia.'.jpg',
			'max_size'      => '9000'
		);      
		
		//$img = $configuracao['file_name']; //str_replace(".jpg", "",($configuracao['file_name']));
		
		//echo ($img); die;
		
		$this->load->library('upload');
		$this->upload->initialize($configuracao);
		/*if ($this->upload->do_upload('imagem'))
			echo 'Arquivo salvo com sucesso.';
		else
			echo $this->upload->display_errors();
		*/
		
		$this->load->model("empresas_model");
	    $this->empresas_model->salvar($empresa);
	    $this->session->set_flashdata("success", "Empresa cadastrada com sucesso");

	    redirect("/login");
	}    
}
