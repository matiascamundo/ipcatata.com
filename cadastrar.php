<?php
session_start();
include_once("conex.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$resultado_usuario = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado_usuario);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro_pauta_geral.php');
	exit;
}

$sql = "INSERT INTO login (nome, usuario, senha, datacadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($conn->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conn->close();

header('Location: cadastro_pauta_geral.php');
exit;
?>