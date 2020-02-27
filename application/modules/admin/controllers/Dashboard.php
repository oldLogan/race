<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	function __construct()
    {
		parent::__construct();
	}
	
	public function index()
	{
        $this->load->templateAdmin("dashboard");
	}

    public function autenticar() {
        $this->load->model("usuarios_model");
        $login = $this->input->post("login");
        $senha = md5($this->input->post("senha"));

        $usuario = $this->usuarios_model->buscaPorLoginESenha($login, $senha);
        if($usuario) {
		    // $this->session->set_flashdata("success" ,"Logado com sucesso");
		    $this->session->set_userdata("usuario_logado", $usuario);
		} else {
		    // $this->session->set_flashdata("danger" ,"Usuário ou senha inválida");
		}

		redirect("admin/dashboard");
    }	
}
