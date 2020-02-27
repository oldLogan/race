<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends MX_Controller {

    private $path = "contato";
    private $pathFull;

	function __construct()
    {
        parent::__construct();
        $this->pathFull = '\/admin\/'.$this->path;
    }
	
	public function listar(){
        $this->load->model("contato_model");
        $contatos = $this->contato_model->listar();
        $dados = array("contatos" => $contatos);

		$this->load->templateAdmin($this->path.'/listar', $dados);
    }

    public function deletar($id){
        $this->load->model("contato_model");
        $contatos = $this->contato_model->deletar($id);
        redirect($this->pathFull."/listar");
    }    
    
    public function gravar(){
        $this->load->model("estado_model");
        $instrutor = array(
            'nome' => $this->input->post("nome"),
            'cpf' => $this->input->post("cpf"),
        );
        $this->instrutor_model->salva($instrutor);
        redirect($this->pathFull."/listar");
    }
}
