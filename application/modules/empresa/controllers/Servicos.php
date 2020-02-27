<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Servicos extends MX_Controller {

	public function index(){
		$usuarioLogado = $this->session->userdata("user_auth");
		$this->load->model("empresa_produtos_model");
		$empresa_produtos = $this->empresa_produtos_model->listaPorEmpresa($usuarioLogado["id"]);

		$dados = array('empresa_produtos' => $empresa_produtos);
		$this->load->templateEmpresa('/servicos/index', $dados);
	}

	public function formulario(){
        $usuarioLogado = $this->session->userdata("user_auth");
        $this->load->model("empresa_produtos_model");
        $produtos = $this->empresa_produtos_model->buscaProdutosDisponiveisPorIdEmpresa($usuarioLogado["id"]);
        
        $dados = array('produtos' => $produtos, "usuariologado" => $usuarioLogado);
		$this->load->templateEmpresa('/servicos/formulario', $dados);
	}

	public function gravar(){	
        $this->load->model("empresas_model");
        $this->load->model("empresa_produtos_model");
		$usuarioLogado = $this->session->userdata("user_auth");

        $empresa_produto = array(
            'id_empresa' => $usuarioLogado["id"],
            'id_produto' => $this->input->post("id_produto"),
            'valor' => $this->input->post("valor")
        );
        $id_empresa_produto = $this->empresa_produtos_model->salvar($empresa_produto);

        if(!empty($this->input->post("dados")) && $id_empresa_produto != 0){
			$dadosJson = json_decode($this->input->post("dados"));
            $lista_empresa_produto_servico = array();

            foreach ($dadosJson as $item) {
                $empresa_produto_servico = array(
                    "id_empresa_produto" => $id_empresa_produto,
                    "id_produto" => $item->id_produto, 
                    "id_servico" => $item->id_servico, 
                    "titulo" => $item->titulo, 
                    // "descricao" => $item->descricao, 
                    "valor" => $item->valor, 
                    "ordem" => $item->ordem, 
                    "tem_aula" => $item->tem_aula, 
                    "qtd_aula" => $item->qtd_aula, 
                    "tempo_aula" => $item->tempo_aula, 
                    "valor_aula_extra" => $item->valor_aula_extra
                );
                array_push($lista_empresa_produto_servico, $empresa_produto_servico);
            }

            $this->empresas_model->salvarProdutoServico($lista_empresa_produto_servico);
		}
	    redirect("/empresa/servicos");
		
	}

    public function deletar($id){
        $this->load->model("empresa_produtos_model");
        $result = $this->empresa_produtos_model->deletar($id);

        if($result){
            $this->session->set_flashdata("success", "Serviço deletado com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Serviço não deletado");
        }
        redirect("/empresa/servicos");
    }	

	public function editar(){
		$this->load->model("empresas_model");
        $this->load->model("empresa_produtos_model");
		
		$id = $_GET['id'];
		$dados['produtos'] = $this->empresas_model->listarComProdutos($id);
		
		$id_empresa = $_GET['id'];
		$dados['servicos'] = $this->empresas_model->buscaServicoPorEmpresa($id_empresa);
					
		foreach($dados['produtos'] as $produto){ 
					
			
				
				$id_id = $produto["id_empresa"];
				$nme_autoescola = $produto["nomefantasia"]; 
				$descricao = $produto["empre_descr"]; 
				$prodTitulo = $produto["titulo"]; 
				$valor = $produto["valor"]; 

				$prod['nme_autoescola'] = $nme_autoescola;
				$prod['descricao'] =  $descricao;
				$prod['prodTitulo'] =  $prodTitulo;
				$prod['valor'] =  $valor;
				
				foreach($dados['servicos'] as $servico){ 
					
					
									
						$id_servico = $servico["id_servico"];
						$nme_servico = $servico["titulo"]; 
						$valor = $servico["valor"];
						
						
					
				}

						
		}
		
		$dados = array('produto' => $prod, 'servico' => isset($serv)?$serv:null);
		
		$this->load->templateEmpresa('/servicos/editar', $dados); 
		//var_dump($dados); die;
	}
	
}
