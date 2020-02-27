<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

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
	public function index()
	{
		$this->load->view('login');
	}

    public function autenticar() {
        $this->load->model("usuarios_model", null,true);
        $login = $this->input->post("login");
        $senha = md5($this->input->post("senha"));

		$usuario = $this->usuarios_model->buscaPorLoginESenha($login, $senha);
		if(empty($usuario)){
			$this->session->set_flashdata("danger" ,"Usuário ou senha inválida");
			redirect("admin/login");
		}
				
		if($usuario) {
		    // $this->session->set_flashdata("success" ,"Logado com sucesso");
			$this->session->set_userdata("usuario_logado", $usuario);
			redirect("admin/dashboard");
		}
	}
	
    public function logout(){
	    $this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success" ,"Deslogado com sucesso");

		redirect("/admin/login");
	}		
}
