<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends MX_Controller {

	public function index(){
		
		$this->load->template('index');
		
	}
	
	public function gravar(){
		
		$this->load->model("race_model");
		$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

		$dados = file($arquivo_tmp);
		
		foreach($dados as $linha){
			
			$linha = trim($linha);
			$valor = explode(' ', $linha);
						
			$hora = $valor[0];
			$cod_piloto = $valor[1];
			$piloto = $valor[3];
			$num_volta = $valor[4];
			$tempo = $valor[5];
			$vlc_media = $valor[6];
			
			$data = array('hora' => $hora, 'cod_piloto' => $cod_piloto, 'piloto' => $piloto, 'num_volta' => $num_volta, 'tempo' => $tempo, 'vlc_media' => $vlc_media);
			$this->race_model->salvar($data);
			
		}
		
		$this->load->template('carregando');
	}
		
	public function carregando(){
		
		$this->load->template('carregando');
		
	}
	
	public function resultados(){
		
		$this->load->model("race_model");
		$piloto = $this->race_model->listar_piloto();
		$volta = $this->race_model->melhor_volta();
		$vence = $this->race_model->vencedor();
				
		$dados = array('piloto' => $piloto, 'volta' => $volta, 'vence' => $vence);
			
		$this->load->template('resultados', $dados);
		//echo '<pre>'; print_r($dados['vence']); echo '</pre>'; die;
		
	}
	
	public function dados(){
		
		$id = $_GET['id']; 
		
		$this->load->model("race_model");
		$piloto = $this->race_model->dados_piloto($id); 
		$pilotos = array('piloto' => $piloto);
		//var_dump($pilotos);die;
		$this->load->template('dados', $pilotos);
				
	}
	
}

