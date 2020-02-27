<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrutor extends MX_Controller {

	public function index(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("instrutor_model");
		$instrutores = $this->instrutor_model->listaPorEmpresa($usuarioLogado["id"]);

		$dados = array('instrutores' => $instrutores);

		$this->load->templateEmpresa('/instrutor/index', $dados);
	}

	public function formulario(){
		$this->load->templateEmpresa('/instrutor/formulario');
	}

	public function gravar(){

		$this->load->model("instrutor_model");
		$rules = $this->instrutor_model->getRules();

		$this->load->library('form_validation');
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->templateEmpresa('/instrutor/formulario', $erros);
		} else {
			$usuarioLogado = $this->session->userdata("user_auth");
			$instrutor = array(
				'id_empresa' => $usuarioLogado["id"],
				'nome' => $this->input->post("nome"),
				'cpf' => $this->input->post("cpf")
			);

			$result = $this->instrutor_model->salvar($instrutor);

			if($result){
				$this->session->set_flashdata("success", "Instrutor cadastrado com sucesso");
				redirect("/empresa/instrutor");
			}else{
				$this->session->set_flashdata("danger", "Instrutor não cadastrado");
				redirect("/empresa/instrutor/formulario");
			}
		}
	}

    public function deletar($id){
        $this->load->model("instrutor_model");
        $this->instrutor_model->deletar($id);

        redirect("/empresa/instrutor");
    }	

}
