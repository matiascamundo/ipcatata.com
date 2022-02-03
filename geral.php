<?php
session_start();
include_once("cone.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$TIC = filter_input(INPUT_POST, 'TIC', 
	FILTER_SANITIZE_EMAIL);
$Lportuguesa = filter_input(INPUT_POST, 'Lportuguesa', 
	FILTER_SANITIZE_STRING);
$Linglesa = filter_input(INPUT_POST, 'Linglesa', 
	FILTER_SANITIZE_STRING);
$FAI = filter_input(INPUT_POST, 'FAI', 
	FILTER_SANITIZE_STRING);
$Educacaofisica = filter_input(INPUT_POST, 'Educacaofisica', 
	FILTER_SANITIZE_STRING);
$Quimica = filter_input(INPUT_POST, 'Quimica', 
	FILTER_SANITIZE_STRING);
$Electrotecnia = filter_input(INPUT_POST, 'Electrotecnia', 
	FILTER_SANITIZE_STRING);
$Desenhotecnico = filter_input(INPUT_POST, 'Desenhotecnico', 
	FILTER_SANITIZE_STRING);
$Matematica = filter_input(INPUT_POST, 'Matematica', 
	FILTER_SANITIZE_STRING);
$Fisica = filter_input(INPUT_POST, 'Fisica', 
	FILTER_SANITIZE_STRING);
$OGI = filter_input(INPUT_POST, 'OGI', 
	FILTER_SANITIZE_STRING);
$Empreendedorismo = filter_input(INPUT_POST, 'Empreendedorismo', 
	FILTER_SANITIZE_STRING);
$TLP = filter_input(INPUT_POST, 'TLP', 
	FILTER_SANITIZE_STRING);
$SEAC = filter_input(INPUT_POST, 'SEAC', 
	FILTER_SANITIZE_STRING);
	$PT = filter_input(INPUT_POST, 'PT', 
	FILTER_SANITIZE_STRING);
	$Exame = filter_input(INPUT_POST, 'Exame', 
	FILTER_SANITIZE_STRING);
	$Resultado = filter_input(INPUT_POST, 'Resultado', 
	FILTER_SANITIZE_STRING);
//echo "nome: $nome <br>";
//echo "TIC: $TIC <br>";
//echo "Lportuguesa: $Lportuguesa <br>";
//echo "Linglesa: $Linglesa<br>";
//echo "FAI: $FAI<br>";
//echo "Educacaofisica: $Educacaofisica<br>";
//echo "Quimica: $Quimica<br>";
//echo "Electrotecnia: $Electrotecnia<br>";
//echo "Desenhotecnico: $Desenhotecnico<br>";
//echo "Matematica: $Matematica<br>";
//echo "Fisica: $Fisica<br>";
//echo "OGI: $OGI<br>";	
//echo "Empreendedorismo: $Empreendedorismo<br>";
//echo "TLP: $TLP<br>";
//echo "SEAC: $SEAC<br>";
//echo "PT: $PT<br>";
//echo "Exame: $Exame<br>";
//echo "Resultado: $Resultado<br>";					
//Cadastrar_pauta_10ª_classe_inf.php

$result_usuario = "INSERT INTO geral (nome, TIC, Lportuguesa, Linglesa, FAI, Educacaofisica, Quimica, Electrotecnia, Desenhotecnico, Matematica, Fisica, OGI, Empreendedorismo, TLP, SEAC, PT, Exame, Resultado, criado) VALUES ('$nome', '$TIC', '$Lportuguesa', '$Linglesa', '$FAI', '$Educacaofisica', '$Quimica','$Electrotecnia', '$Desenhotecnico', '$Matematica', '$Fisica', '$OGI', '$Empreendedorismo', '$TLP', '$SEAC', '$PT', '$Exame', '$Resultado'  NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 10ª classe cadastrado com sucesso</p></center>";
	header("Location: cadastrar_puta_10ª_classe_inf.php");
}else{
	$_SESSION['msg'] = "<center><p style='color:red;'>Aluno da 10ª classe não foi cadastrado com sucesso</p></center>";
	header("Location: cadastrar_pauta_10ª_classe_inf.php");
}