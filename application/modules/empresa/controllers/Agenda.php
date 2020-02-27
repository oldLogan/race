<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends MX_Controller {

	public function index(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("agenda_model");
		$agendas = $this->agenda_model->buscaPorIdEmpresa($usuarioLogado["id"]);

		$dados = array('agendas' => $agendas);
		$this->load->templateEmpresa('/agenda/index', $dados);
	}

	public function formulario()
	{
		$usuarioLogado = $this->session->userdata("user_auth");

		$this->load->model("empresas_model");
		$empresa = $this->empresas_model->buscaPorId($usuarioLogado["id"]);
		$servicos = $this->empresas_model->buscaServicoPorEmpresa($usuarioLogado["id"]);

		$dados = array('empresa' => $empresa, "usuariologado" => $usuarioLogado, "servicos" => $servicos);
		$this->load->templateEmpresa('agenda/formulario', $dados);
	}

	public function turma($id){
		$usuarioLogado = $this->session->userdata("user_auth");
		$dados = "";
		
		$this->load->templateEmpresa('agenda/turma', $dados);
	}
	
	public function produtos($id){
		$usuarioLogado = $this->session->userdata("user_auth");

		$this->load->model("agenda_model");
		$this->load->model("produtos_model");
		$agenda = $this->agenda_model->buscaPorIdEmpresa($usuarioLogado["id"]);


		$dados = array("usuariologado" => $usuarioLogado);
		$this->load->templateEmpresa('agenda/produtos', $dados);
	}
    
    public function gravar(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("empresas_model");
		$this->load->model("agenda_model");

		$servicos = $this->empresas_model->buscaServicoPorEmpresa($usuarioLogado["id"]);

		$count = 0;
		foreach ($servicos as $servico) {
			$agenda = array(
				"id_empresa" => $usuarioLogado["id"],
				"id_empresa_produto_servico" => $servico["id"],
				"inicio_expediente" => $this->input->post("inicio_expediente_".$servico["id"]),
				"fim_expediente" => $this->input->post("fim_expediente_".$servico["id"]),
				"tempo_aula" => $this->input->post("tempo_aula_".$servico["id"]),
				"intervalo" => $this->input->post("intervalo_".$servico["id"]),
				"dias_semana" => join("-",$this->input->post("dias_semana_".$servico["id"]))
			);
			$result = $this->agenda_model->salvar($agenda);
			if($result)
				$count = $count + 1;
		}

	    if($count > 0){
            $this->session->set_flashdata("success", $count." agenda(s) cadastrada(s) com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Não foi possí­vel atualizar a agenda");
        }

        redirect("/empresa/agenda");

	}
	
    public function deletar($id){
        $this->load->model("agenda_model");
        $result = $this->agenda_model->deletar($id);

        if($result){
            $this->session->set_flashdata("success", "Agenda deletada com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Agenda não deletada");
        }
        redirect("/empresa/agenda");
    }	
}
