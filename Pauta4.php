<?php
session_start();
include_once("conecl.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$mac = filter_input(INPUT_POST, 'mac', 
	FILTER_SANITIZE_EMAIL);
$npp = filter_input(INPUT_POST, 'npp', 
	FILTER_SANITIZE_STRING);
$npt = filter_input(INPUT_POST, 'npt', 
	FILTER_SANITIZE_STRING);
$mt = filter_input(INPUT_POST, 'mt', 
	FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "MAC: $mac <br>";
//echo "NPP: $npp <br>";
//echo "NPT: $npt <br>";
//echo "MT: $mt<br>";
//Mini_pauta_projecto_13ª_classe.php
$result_usuario = "INSERT INTO pauta4 (nome, mac, npp, npt, mt, criado) VALUES ('$nome', '$mac', '$npp', '$npt', '$mt', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 13ª cadastrado com sucesso</p></center>";
	header("Location: Mini_pauta_projecto_13ª_classe.php");
}else{
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 13ª não foi cadastrado com sucesso</p></center>";
	header("Location: Mini_pauta_projecto_13ª_classe.php");
}
