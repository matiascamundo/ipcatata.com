<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
<title>Cadastrar lista 13ª classe</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">		
	</head>
	<body>
		<center><H6>Cadastar lista de presença 13ª classe</H6></center>
		<h2 align="center">Lista de presença 13ª Classe Informática<h2>
		 
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="Pauta4.php">
			<fieldset>
<legend>Informações Pessoais</legend>
			<center><label>Nome: </label><br>
			<input type="text" name="nome" size="40"placeholder="Digite o nome completo"class="classe_actual"><Br><Br>

			<label>Idade:</label><br>
			<input type="text" name="idade" size="40"placeholder="Digite Idade"class="classe_actual"><br><br>

			<label>Estádia:</label><br>
			<input type="text" name="estadia" size="40"placeholder="Digite Estádia"class="classe_actual"><br><br>

			<label>Nº de processo: </label><br>
			<input type="text" name="npt" size="40"placeholder="Digite Nº de processo "class="classe_actual"><br><br>
			<center><input type="submit" size="40" value="Cadastrar" class="submit"></center>
			</fieldset>
		</form><p>