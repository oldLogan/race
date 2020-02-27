<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	 
	public function index(){
		$this->load->model("pilotos_model");
		$this->load->model("race_model");
		$pilotos = $this->pilotos_model->listar();
		$corridas = $this->race_model->listar();
		$dados = array('pilotos'=>$pilotos,'corridas'=>$corridas);

		$this->load->template('index', $dados);
		///var_dump($dados['corridas']); die;
	}

	public function resultados(){
		$this->load->model("race_model");
		
		
		$dados = $this->race_model->listar();

		$this->load->template('resultados', $dados);
		//var_dump($dados); die;
	}
	
}

