<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends MX_Controller {

	public function index(){
		
		$this->load->template('index');
		
	}
	
	public function processar(){
		
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
		
		}
		
		$this->load->model("race_model");
		$this->race_model->salvar($data);
		
		$this->load->template('resultados');

	}

}

