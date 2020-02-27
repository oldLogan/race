<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends MX_Controller {

	function __construct()
    {
		parent::__construct();
	}

	public function listar(){
        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->listar();
        $dados = array("produtos" => $produtos);
        
        $this->load->templateAdmin('produtos/listar', $dados);
    }    
    
	public function servicos(){
        $this->load->model("produtos_model");
        $this->load->model("empresas_model");
        $servicos = $this->produtos_model->listarServicos();
        $empresa_tipo = $this->empresas_model->listaTipos();
        $dados = array("servicos" => $servicos, "empresa_tipo" => $empresa_tipo);
        
        $this->load->templateAdmin('produtos/servicos', $dados);
    }    

    public function formulario($id = null){
        $this->load->model("empresas_model");
        $this->load->model("produtos_model");
        $empresa_tipo = $this->empresas_model->listaTipos();
        $produtos = $this->produtos_model->listar();
        $servicos = $this->produtos_model->listarServicos();

        $produto = array("id_empresa_tipo" => null, "titulo" => "", "descricao" => "");
        
        $dados = array("empresa_tipo" => $empresa_tipo, 'produto' => $produto, 'produtos' => $produtos, 'servicos' => $servicos);
        if(!empty($id)){
            $produto = $this->produtos_model->buscaPorId($id);
            $produto_servicos = $this->produtos_model->buscaServicoPorProduto($id);
            $dados['produto'] = $produto;
            $dados['produto_servicos'] = $produto_servicos;
        }

        $this->load->templateAdmin('produtos/formulario', $dados);
    }

    public function gravar($publicado = true){
        $this->load->model("produtos_model");
        $produto = array(
            //'id_tipo_empresa' => $this->input->post("id_tipo_empresa"),
            'titulo' => $this->input->post("titulo"),
            'descricao' => htmlentities($this->input->post("descricao")),
            'publicado' => $publicado
        );
        if(!empty($this->input->post("id"))){
            $produto['id'] = $this->input->post("id");
        }
        $this->produtos_model->salvar($produto);
        redirect("/admin/produtos/listar");
    }

    public function deletar($id){
        $this->load->model("produtos_model");
        $this->produtos_model->deletar($id);

        redirect("/admin/produtos/listar");
    }
    
	// ---------------------------------------------------------------
	// 	ITEMS
	// ---------------------------------------------------------------    

    public function gravarServico(){
        $this->load->model("produtos_model");
		$servico = array(
			'id_empresa_tipo' => $this->input->post("id_empresa_tipo"),
            'titulo' => $this->input->post("titulo"),
            'descricao' => $this->input->post("descricao")
        );
        if(!empty($this->input->post("id"))){
            $servico['id'] = $this->input->post("id"); 
		}
        $this->produtos_model->salvarServico($servico);
		
		
				
        redirect("/admin/produtos/servicos");
    }
		
    public function gravarProdutoServico(){
        $this->load->model("produtos_model");
        $produto_servico = array(
            'id_servico' => $this->input->post("id_servico"),
            'id_produto' => $this->input->post("id_produto")
        );
        $this->produtos_model->salvarProdutoServico($produto_servico);
        redirect("/admin/produtos/formulario/".$produto_servico["id_produto"]);
    }    

    public function deletarServico($id){
        $this->load->model("produtos_model");
        $this->produtos_model->deletarServico($id);
        
        redirect("/admin/produtos/servicos");
    }    
    public function deletarProdutoServico($id){
        $this->load->model("produtos_model");
        $id_produto = $this->produtos_model->deletarProdutoServico($id);

        redirect("/admin/produtos/formulario/".$id_produto);
    }    
}
