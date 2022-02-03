<?php
session_start();
include_once("conectar.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$classe = filter_input(INPUT_POST, 'classe', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
$lectivo = filter_input(INPUT_POST, 'lectivo', FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Endereço: $endereco <br>";
//echo "Telefone: $telefone <br>";
//echo "Classe: $classe<br>";
//echo "Curso: $curso<br>";
//echo "lectivo: $lectivo<br>";
//Index2
$result_usuario = "INSERT INTO estudante (nome, email, endereco, telefone, classe, curso, lectivo, criado) VALUES ('$nome', '$email', '$endereco', '$telefone', '$classe', '$curso', '$lectivo', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 12ª cadastrado com sucesso</p></center>";
	header("Location: index2.php");
}else{
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 12ª não foi cadastrado com sucesso</p></center>";
	header("Location: index2.php");
}
