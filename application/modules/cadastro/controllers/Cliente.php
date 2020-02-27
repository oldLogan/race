<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends MX_Controller {

	public function formulario()
	{


		if(!empty($this->input->post("dados"))){
			$dadosJson = json_decode($this->input->post("dados"));
			$this->session->set_userdata("dados", $dadosJson);
		}else{
			$this->session->unset_userdata("dados");
		}
		
		$this->load->model("estados_model");
		$estados = $this->estados_model->lista();

		$dados["estados"] = $estados;

		if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['code'])){
			$dados_fb = $this->loginFacebook($_GET['code']);
			foreach ($dados_fb as $key => $value) {
				$dados[$key] = $value;
			}
		}

		$this->load->template('cliente/formulario', $dados);
	}

	public function loginFacebook($code){
		
			  // Informe o seu App ID abaixo
			  $appId = '417139155767626';

			  // Digite o App Secret do seu aplicativo abaixo:
			  $appSecret = '10a60af6514f419695b3735b96660af7';

			  // Url informada no campo "Site URL"
			  $redirectUri = urlencode('https://www.drivycar.com.br/cadastro/cliente/formulario');

			  // Monta a url para obter o token de acesso e assim obter os dados do usuário
			  $token_url = "https://graph.facebook.com/oauth/access_token?"
			  . "client_id=" . $appId . "&redirect_uri=" . $redirectUri
			  . "&client_secret=" . $appSecret . "&code=" . $code;

			  //pega os dados
			  $response = @file_get_contents($token_url);

			  if($response){
			    $params = null;
			    $params = json_decode($response);
			    
			    if($params->access_token){
			      $graph_url = "https://graph.facebook.com/me?access_token="
			      . $params->access_token;
			      $user = json_decode(file_get_contents($graph_url));
			      $dados['usuarioFacebook'] = $user->name;
			      $dados['idFacebook'] = $user->id;
			      $dados['oauth_provider'] = 'Facebook';
			    }

			  }	
			  return $dados;
	}


	public function gravar(){
		$this->load->model("clientes_model");
		$cliente = $this->parseClienteFromRequest($this->input->post());
		
		$id_cliente = $this->clientes_model->salvar($cliente);

	    if(!empty($id_cliente)){
			$this->session->set_flashdata("success", "Cliente cadastrado com sucesso");
			$id_produto = 0;
			$valor_total = 0;

			$dados = $this->session->userdata('dados');
			if(!empty($dados)){

				$lista_cliente_produto = array();
				foreach ($dados as $item) {
					$cliente_produto = array(
						"id_empresa_produto" => $item->id_empresa_produto,
						"valor" => $item->valor
					);
					$id_produto = $item->id_produto;
					$valor_total = $valor_total + $item->valor;

					array_push($lista_cliente_produto, $cliente_produto);
				};

				$this->clientes_model->salvarClienteProduto($lista_cliente_produto, $id_produto, $id_cliente, $valor_total);
			}
		}else{
			$this->session->set_flashdata("danger", "Não foi possível cadastrar o cliente");
		}

	    redirect("/login");
	}

	public function parseClienteFromRequest($request){
		$nome = getParam($request, "nome");
		$email = getParam($request, "email");
		$cpf = getParam($request, "cpf");
		$telefone = getParam($request, "telefone");
		$celular = getParam($request, "celular");
		$endereco = getParam($request, "endereco");
		$cep = getParam($request, "cep");
		$bairro = getParam($request, "bairro");
		$cidade = getParam($request, "cidade");
		$id_estado = getParam($request, "id_estado");
		$data_nasc = getParam($request, "data_nasc");
		$envio_email = getParam($request, "envio_email");
		$termo = getParam($request, "termo");
		$login = getParam($request, "login");
		$senha = getParam($request, "senha");
		$idOath = getParam($request, "idOath");
		$oauth_provider = getParam($request, "oauth_provider");

		$cliente = array(
			'nome' => $nome,
			'email' => $email,
			'telefone' => $telefone,
			'oauth_provider' => $oauth_provider,
			'oauth_uid' => $idOath 
		);
		if($celular)
			$cliente["celular"] = $celular;

		if($endereco)
			$cliente["endereco"] = $endereco;

		if($cep)
			$cliente["cep"] = $cep;

		if($bairro)
			$cliente["bairro"] = $bairro;

		if($cidade)
			$cliente["cidade"] = $cidade;

		if($id_estado)
			$cliente["id_estado"] = $id_estado;

		if($login)
			$cliente["login"] = $login;
		else
			$cliente["login"] = $email;

		if($senha)
			$cliente["senha"] = $senha;
		else
			$cliente["senha"] = "12345";

		if($cpf)
			$cliente["cpf"] = $cpf;
		else
			$cliente["cpf"] = "00000000000";

		if($termo)
			$cliente["termo"] = $termo == 1 ? 1 : 0;

		if($envio_email)
			$cliente["envio_email"] = $envio_email == 1 ? 1 : 0;

		if($data_nasc)
			$cliente["data_nasc"] = $data_nasc;

		return $cliente;
	}
}
