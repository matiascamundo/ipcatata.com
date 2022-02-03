<?php
session_start();
include_once("acerta.php");

$tempo = filter_input(INPUT_POST, 'tempo', FILTER_SANITIZE_STRING);
$segunda = filter_input(INPUT_POST, 'segunda', 
	FILTER_SANITIZE_EMAIL);
$terca = filter_input(INPUT_POST, 'terca', 
	FILTER_SANITIZE_STRING);
$quarta = filter_input(INPUT_POST, 'quarta', 
	FILTER_SANITIZE_STRING);
$quinta = filter_input(INPUT_POST, 'quinta', 
	FILTER_SANITIZE_STRING);
$sexta = filter_input(INPUT_POST, 'sexta', 
	FILTER_SANITIZE_STRING);
	
//echo "nome: $nome <br>";
//echo "idade: $idade <br>";
//echo "estadia: $estadia <br>";
//echo "processonumero: $processonumero<br>";
//Cadastrar_horario_10ª_classe_inf.php

$result_usuario = "INSERT INTO horario1 (tempo, segunda, terca, quarta, quinta, sexta, criado) VALUES ('$tempo', '$segunda', '$terca', '$quarta','$quinta','$sexta', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 10ª classe cadastrado com sucesso</p></center>";
	header("Location: cadastrar_horario_10ª_classe_inf.php");
}else{
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 10ª classe não foi cadastrado com sucesso</p></center>";
	header("Location: cadastrar_horario_10ª_classe_inf.php");
}