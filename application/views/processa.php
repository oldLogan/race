<?php
session_start();

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//var_dump($dados);

foreach($dados as $linha){
	$linha = trim($linha);
	$valor = explode(' ', $linha);
	///var_dump($valor);
	
	$hora = $valor[0];
	$cod_piloto = $valor[1];
	$piloto = $valor[3];
	$num_volta = $valor[4];
	$tempo = $valor[5];
	$vlc_media = $valor[6];
	
	$result_usuario = "INSERT INTO voltas (hora, cod_piloto, piloto, num_volta, tempo, vlc_media) VALUES ('$hora', '$cod_piloto', '$piloto', '$num_volta', '$tempo', '$vlc_media')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
}
$_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";
//header("Location: index.php");



