<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends MX_Controller {

    public function index(){
		$this->load->model("clientes_model");
		
		$usuarioLogado = $this->session->userdata("user_auth");
		$cliente_produto = $this->clientes_model->listarProdutosPorCliente($usuarioLogado["id"]);
		// $cliente_servico = $this->clientes_model->listarServicosPorCliente($usuarioLogado["id"]);

		$dados = array('cliente_produto' => $cliente_produto, 'usuariologado' => $usuarioLogado);
		$this->load->templateUser('/servicos/index', $dados);
	}
	public function formulario(){
		$this->load->templateUser('formulario');
	}
	public function gravarAgendamento(){
		$usuarioLogado = $this->session->userdata("user_auth");
		
		$agenda_evento = array(
            'id_cliente' => $usuarioLogado["id"],
            'id_agenda' => $this->input->post("id_agenda"),
            'horario' => $this->input->post("ui-timepicker-horario"),
            'data_event' => $this->input->post("data")
        );

        $this->load->model("agenda_model");
        if($this->agenda_model->salvarEvento($agenda_evento)){
            $this->session->set_flashdata("success", "Agenda cadastrada com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Não foi possí­vel cadastrar a agenda");
		}
		
		redirect("/user/servicos");
	}
	public function gravarTurma(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$id_turma = $this->input->post("id_turma");

		$turma_pauta = array(
			"id_turma" => $id_turma,
			"id_cliente" => $usuarioLogado["id"]
		);

		$this->load->model("turma_model");
		$id_turma_pauta = $this->turma_model->salvarPauta($turma_pauta);
        if($id_turma_pauta > 0){
			$this->session->set_flashdata("success", "Turma cadastrada com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Não foi possí­vel cadastrar a turma");
		}
		
		redirect("/user/servicos");
	}
	public function gravarTurmaChamada(){
		$this->load->model("turma_model");

		$data_inicio = $this->input->post("data_inicio");
		$hora_inicio = $this->input->post("hora_inicio");
		$hora_fim = strval(intval(substr($hora_inicio, 0, 2))+1).substr($hora_inicio, 2, 3);
		$id_turma_pauta = $this->input->post("id_turma_pauta");

		$data_inicio_part = explode('/',$data_inicio);
		$data_chamada = date('Y-m-d', strtotime($data_inicio_part[1]."/".$data_inicio_part[0]."/".$data_inicio_part[2]));

		for ($i=0; $i < 20; $i++) {
			$chamada = array(
				"id_turma_pauta" => $id_turma_pauta,
				"status" => 1,
				"data_chamada" => $data_chamada,
				"horario_inicio" => $hora_inicio,
				"horario_fim" => $hora_fim,
			);
			$this->turma_model->salvarChamada($chamada);
			$data_chamada = date('Y-m-d', strtotime($data_chamada. ' + 1 days'));
		}

		$this->session->set_flashdata("success", "Grade horaria cadastrada com sucesso");
		redirect("/user/servicos");
	}
}
