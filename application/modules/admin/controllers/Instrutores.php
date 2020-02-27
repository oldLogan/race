<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrutores extends MX_Controller {

	function __construct()
    {
		parent::__construct();
	}
	
	public function listar(){
        $this->load->model("instrutor_model");
        $instrutores = $this->instrutor_model->lista();
        $dados = array("instrutores" => $instrutores);

		$this->load->templateAdmin('instrutores/listar', $dados);
    }

    public function formulario(){
        $this->load->templateAdmin('instrutores/formulario');
    }    
    
    public function gravar(){
        $this->load->model("instrutor_model");
        $instrutor = array(
            'nome' => $this->input->post("nome"),
            'cpf' => $this->input->post("cpf"),
        );
        $this->instrutor_model->salvar($instrutor);
        redirect("/admin/instrutores/listar");
    }
}
