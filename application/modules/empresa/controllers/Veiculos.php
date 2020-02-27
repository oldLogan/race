<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends MX_Controller {

	public function index(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("empresa_veiculos_model");
		$veiculos = $this->empresa_veiculos_model->listaPorEmpresa($usuarioLogado["id"]);

		$dados = array('veiculos' => $veiculos);
		$this->load->templateEmpresa('/veiculos/index', $dados);
    }
        
	public function formulario($erros = null){
        $this->load->model("veiculos_model");
        
        $tipo_veiculo = $this->veiculos_model->listaTipos();
		$veiculos = $this->veiculos_model->lista();

        $dados = array('veiculos' => $veiculos, 'tipo_veiculo' => $tipo_veiculo);
        if(!empty($erros)) $dados["mensagens"] = $erros["mensagens"];
		$this->load->templateEmpresa('/veiculos/formulario', $dados);
	}

    public function gravar(){
        $this->load->model("empresa_veiculos_model");
        $this->load->library('form_validation');

        $usuarioLogado = $this->session->userdata("user_auth");

        if($this->input->post("veiculosSelecionados")){
            $veiculosSelecionados = explode(',', $this->input->post("veiculosSelecionados"));

            foreach ($veiculosSelecionados as $id_veiculo) {
                if(!empty($id_veiculo)){
                    $empresa_veiculo = array(
                        'id_empresa' => $usuarioLogado["id"],
                        'id_veiculo' => $id_veiculo
                    );

                    $this->empresa_veiculos_model->salvar($empresa_veiculo);
                }
            }

            $this->session->set_flashdata("success", "Veículo cadastrado com sucesso");
            redirect("/empresa/veiculos");
        }else{
            $this->load->model("veiculos_model");
            $rules = $this->veiculos_model->getRules();
            $this->form_validation->set_rules($rules);

           /* if ($this->form_validation->run() == FALSE) {
                $erros = array('mensagens' => validation_errors());
                $this->formulario($erros); //var_dump($erros); die;
            } else { */
                
                $veiculo = array(
                    'veiculo_tipo' => $this->input->post("tipo_veiculo"),
                    'modelo' => $this->input->post("modelo"),
                    'ano' => $this->input->post("ano"),
                );
                $id_veiculo = $this->veiculos_model->salvar($veiculo);
        
                if($usuarioLogado && $id_veiculo){
                    $this->load->model("empresa_veiculos_model");
                    $empresa_veiculo = array(
                        'id_empresa' => $usuarioLogado["id"],
                        'id_veiculo' => $id_veiculo
                    );
                    $result = $this->empresa_veiculos_model->salvar($empresa_veiculo);
                }

                if($result){
                    $this->session->set_flashdata("success", "Veículo cadastrado com sucesso");
                    redirect("/empresa/veiculos");
                }else{
                    $this->session->set_flashdata("danger", "Veículo não cadastrado");
                    redirect("/empresa/veiculos/formulario");
                }
            //}
        }
    }
    
    public function deletar($id){
        $this->load->model("empresa_veiculos_model");
        $result = $this->empresa_veiculos_model->deletar($id);

        if($result){
            $this->session->set_flashdata("success", "Veículo removido com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Veículo não removido");
        }

        redirect("/empresa/veiculos");
    }       

}
