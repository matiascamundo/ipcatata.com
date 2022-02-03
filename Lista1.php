<?php
session_start();
include_once("conctato.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', 
	FILTER_SANITIZE_EMAIL);
$estadia = filter_input(INPUT_POST, 'estadia', 
	FILTER_SANITIZE_STRING);
$processonumero = filter_input(INPUT_POST, 'processonumero', 
	FILTER_SANITIZE_STRING);
	
//echo "nome: $nome <br>";
//echo "idade: $idade <br>";
//echo "estadia: $estadia <br>";
//echo "processonumero: $processonumero<br>";
//Cadastrar_lista_10ª_classe_inf.php

$result_usuario = "INSERT INTO lista1 (nome, idade, estadia, processonumero,criado) VALUES ('$nome', '$idade', '$estadia', '$processonumero', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 10ª classe cadastrado com sucesso</p></center>";
	header("Location: cadastrar_lista_10ª_classe_inf.php");
}else{
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 10ª classe não foi cadastrado com sucesso</p></center>";
	header("Location: cadastrar_lista_10ª_classe_inf.php");
}