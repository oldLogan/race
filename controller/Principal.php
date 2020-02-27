<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends MX_Controller {

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
	
	
	 
	public function index(){
		$this->load->model("pilotos_model");
		$this->load->model("race_model");
		
		$usuarioLogado = $this->session->userdata("user_auth");
		$produtos = $this->produtos_model->listaPorTipoEmpresa(1);
		$estados = $this->estados_model->lista();
		$cidades = $this->estados_model->listaCidades();
		$bairros = $this->estados_model->listaBairros();

		$listasFiltros = array('produtos' => $produtos, 'estados' => $estados, 'cidades' => $cidades, 'bairros' => $bairros);		
		$dados = array('produtos' => $produtos, 'estados' => $estados, 'usuariologado' => $usuarioLogado, 'listasFiltros' => json_encode($listasFiltros));

		$this->load->template('index', $dados);
		//var_dump($dados); die;
	}

	public function sobre(){
		$this->load->template('sobre');
	}

	public function servicos(){
		$this->load->template('servicos');
	}

	public function habilitacao(){
		$this->load->template('habilitacao');
	}

	public function contato(){
		$this->load->template('contato');
	}
	
	public function como_tirar_primeira_habilitacao(){
		$this->load->template('como_tirar_primeira_habilitacao');
	}
	
	public function primeira_habilitacao(){
		$this->load->template('primeira_habilitacao');
	}
	
	public function adicao_categoria(){
		$this->load->template('adicao_categoria');
	}
	
	public function mudanca_categoria(){
		$this->load->template('mudanca_categoria');
	}
	
	public function curso_reciclagem(){
		$this->load->template('curso_reciclagem');
	}
	
	public function renovacao_cnh(){
		$this->load->template('renovacao_cnh');
	}
	
	public function faq(){
		$this->load->template('faq');
	}
	
	public function promocao(){
		$this->load->template('promocao');
	}
	
	public function informacoes(){
		
		$this->load->model("empresa_produtos_model");
		$this->load->model("empresas_model");
		
		$dados['id'] = $_GET['id'];
		$id = $_GET['id'];
		
		$idpr = $_GET['idpr'];  
		
		$dados['produtos'] = $this->empresas_model->listarComProdutos($id);
		
		$dados['id_empresa'] = $_GET['idpr'];
		$id_empresa = $_GET['id'];
		
		$dados['servicos'] = $this->empresas_model->buscaServicoPorEmpresa($id_empresa);
				
			
		foreach($dados['produtos'] as $produto){ 
		//$produto = $dados['produtos'][0]; 
			
			if($produto['id_empresa'] == $id && $produto['id'] == $idpr){
				
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
					
					if($servico['id_empresa'] == $id_empresa && $servico['id_produto'] == $idpr){
									
						$id_servico = $servico["id_servico"];
						$nme_servico = $servico["titulo"]; 
						$valor = $servico["valor"];
						
						if(!isset($serv)){
							$serv[0]['nme_servico'] = $nme_servico;
							$serv[0]['valor'] = $valor;
							$serv[0]['id_servico'] = $id_servico;
						} else {
							array_push($serv, array('nme_servico' => $nme_servico, 'valor' => $valor, 'id_servico' => $id_servico));
						}
						//var_dump($servico); die;
					}
					
				}

			}
			
		}
		
		$dados = array('produto' => $prod, 'servico' => isset($serv)?$serv:null);
		//echo '<pre>';
		//print_r($dados); die;
		//echo '</pre>';
		$this->load->template('informacoes',  $dados);
	}
	
	
	public function sendContato(){
		$this->load->model("contato_model");
		$dados = $this->input->post();
		$nome = getParam($dados, "nome");
		$email = getParam($dados, "email");
		$telefone = getParam($dados, "telefone");
		$mensagem = getParam($dados, "mensagem");
		$assunto = getParam($dados, "assunto");

		if($nome)
			$contato["nome"] = $nome;
		if($email)
			$contato["email"] = $email;
		if($telefone)
			$contato["telefone"] = $telefone;
		if($mensagem)
			$contato["mensagem"] = $mensagem;
		if($assunto)
			$contato["id_produto"] = $assunto;

		$this->contato_model->salvar($contato);

		$this->load->library('email');
		
		$this->email->from('contato@drivycar.com.br', 'Contato Drivy'); // Remetente
		$this->email->to($dados["email"], $dados["nome"]); // Destinat�rio
		$this->email->bcc("contato@drivycar.com.br");
		$this->email->subject("Contato - Drivycar");
		$this->email->message("Sua mensagem foi recebida pela equipe Drivycar e será respondida em até 48 horas".
		"<br><br>"."Assunto: ".$dados["assunto"]."<br><br>"."Mensagem: ".$dados["mensagem"]."<br><br><br>"
		."Antenciosamente"."<br><br>"."<br>"."<img src='http://www.drivycar.com.br/assets/images/assinatura_drivy.jpg'/>");
		//$this->email->attach("assets/images/logomarca.jpg"); //Anexo;
		
		if($this->email->send())
		{
			$this->email->clear();
			$this->email->from('contato@drivycar.com.br', 'Contato Drivy'); // Remetente
			$this->email->to("contato@drivycar.com.br", "Recebida - ".$dados["nome"]); // Destinat�rio
			$this->email->subject("Contato - Drivycar");
			$this->email->message("Assunto: ".$dados["assunto"]."<br><br>"."Mensagem:".$dados["mensagem"]."<br><br>"."e-mail:".$dados["email"]);
			$this->email->send();

			$this->session->set_flashdata('success','Email enviado com sucesso!');
			redirect("/contato");
		}
		else
		{
			$this->session->set_flashdata('danger',$this->email->print_debugger());
			redirect("/contato");
		}
		
	}

	public function busca(){
		$this->load->model("produtos_model");
		$this->load->model("estados_model");
		
		$usuarioLogado = $this->session->userdata("user_auth");
		$todosProdutos = $this->produtos_model->listaPorTipoEmpresa(0);
		$produtosAutoEscolas = $this->produtos_model->listaPorTipoEmpresa(1);
		$produtosClinicas = $this->produtos_model->listaPorTipoEmpresa(2);
		
		$estados = $this->estados_model->lista();
		$cidades = $this->estados_model->listaCidades();
		$bairros = $this->estados_model->listaBairros();

		$listasFiltros = array('cidades' => $cidades, 'bairros' => $bairros); 
		$produtos = array("todosProdutos" => $todosProdutos, "autoEscolas" => $produtosAutoEscolas, "clinicas" => $produtosClinicas);
		$dados = array('produtos' => $produtos, 'estados' => $estados, 'usuariologado' => $usuarioLogado, 'listasFiltros' => json_encode($listasFiltros));

		$this->load->template('busca', $dados); 
	}	
}

