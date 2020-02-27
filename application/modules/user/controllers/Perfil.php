<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends MX_Controller {

	public function dados()
	{
		$usuarioLogado = $this->session->userdata("user_auth");

        $this->load->model("clientes_model");
        $this->load->model("estados_model");

		$estados = $this->estados_model->lista();
		$cliente = $this->clientes_model->buscaPorId($usuarioLogado["id"]);

		$dados = array('cliente' => $cliente, "estados" => $estados);
		$this->load->templateUser('perfil/dados', $dados);
    }
    
    public function gravar(){
        $cliente = array(
            'id' => $this->input->post("id"),
            'nome' => $this->input->post("nome"),
            'cpf' => $this->input->post("cpf"),
            'email' => $this->input->post("email"),
            'telefone' => $this->input->post("telefone"),
            'celular' => $this->input->post("celular"),
            'endereco' => $this->input->post("endereco"),
            'cep' => $this->input->post("cep"),
            'bairro' => $this->input->post("bairro"),
            'cidade' => $this->input->post("cidade"),
            'estado' => $this->input->post("estado"),
            'login' => $this->input->post("login")
        );

        $this->load->model("clientes_model");
        if($this->clientes_model->salvar($cliente)){
            $this->session->set_flashdata("success", "Cliente atualizado com sucesso");
            $cliente["tipologin"] = "cliente";
            $this->session->set_userdata("user_auth", $cliente);
        }else{
            $this->session->set_flashdata("danger", "Não foi possí­vel atualizar o cliente");
        }
        

        redirect("/user/perfil/dados");
    }
}
