<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localidade extends MX_Controller {

    private $path = "localidade";
    private $pathFull;

	function __construct()
    {
        parent::__construct();
        $this->pathFull = '\/admin\/'.$this->path;
    }
	
	public function listar(){
        $this->load->model("estados_model");
        $cidades = $this->estados_model->listaCidades();
        $bairros = $this->estados_model->listaBairros();
        $dados = array("cidades" => $cidades, "bairros" => $bairros);

		$this->load->templateAdmin($this->path.'/listar', $dados);
    }

    public function formulario(){
        $this->load->templateAdmin($this->path.'/formulario');
    }    
    
    public function gravar(){
        $this->load->model("estado_model");
        $cidades = array(
            'nome' => $this->input->post("cidade")
            'id_estado' => $this->input->post("estado")
        );
        $this->estado_model->gravarCidade($valor, $estado);
        redirect($this->pathFull."/listar");
    }
}
