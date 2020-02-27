<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends MX_Controller {

	public function index(){
        $usuarioLogado = $this->session->userdata("user_auth");
        
        $this->load->model("turma_model");
        $id = $this->input->get("id");
		$turmas = $this->turma_model->buscaPorIdProdutoServico($id);

		$dados = array('turmas' => $turmas, "id_empresa_produto_servico" => $id);
		$this->load->templateEmpresa('/turma/index', $dados);
	}

	public function formulario($id)
	{
		$usuarioLogado = $this->session->userdata("user_auth");

		$dados = array('id_empresa_produto_servico' => $id);
		$this->load->templateEmpresa('turma/formulario', $dados);
	}

    public function gravar(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("turma_model");
        $id_empresa_produto_servico = $this->input->post("id_empresa_produto_servico");

        $turma = array(
            'id_empresa_produto_servico' => $id_empresa_produto_servico,
            'qtd_aulas' => $this->input->post("qtd_aulas"),
            'lotacao' => $this->input->post("lotacao"),
            'turno' => $this->input->post("turno"),
            'hora_inicio' => $this->input->post("ui-timepicker-hora_inicio"),
            'hora_fim' => $this->input->post("ui-timepicker-hora_fim"),
            'data_inicio' => date_converter($this->input->post("data_inicio")),
            'data_fim' => date_converter($this->input->post("data_fim"))
        );

	    if($this->turma_model->salvar($turma)){
            $this->session->set_flashdata("success", $count." agenda(s) cadastrada(s) com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Não foi possí­vel atualizar a agenda");
        }

        redirect("/empresa/turma/index?id=".$id_empresa_produto_servico);
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
