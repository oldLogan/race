<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boleto extends MX_Controller {

    public function index(){
		$this->load->model("clientes_model");
		$this->load->model("produtos_model");
		$usuarioLogado = $this->session->userdata("user_auth");
		
		$this->load->templateUser('/pagamento/boleto');
	}
	
	public function formulario(){
		$this->load->templateUser('formulario');
	}
	
}
