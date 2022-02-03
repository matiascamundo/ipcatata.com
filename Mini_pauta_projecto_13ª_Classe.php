<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
<title>Mini Pauta 13ª Classe</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">		
	</head>
	<body>
		<center><H6>Mini-Pauta</H6></center>
		<h2 align="center">Mini pauta Projecto tecnólogico 13ª Classe Informática<h2>
		 
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

			<label>MAC:</label><br>
			<input type="text" name="mac" size="40"placeholder="Digite MAC"class="classe_actual"><br><br>

			<label>NPP:</label><br>
			<input type="text" name="npp" size="40"placeholder="Digite NPP"class="classe_actual"><br><br>

			<label>NPT: </label><br>
			<input type="text" name="npt" size="40"placeholder="Digite NPT"class="classe_actual"><br><br>

			<label>MT: </label><br>
			<input type="text" name="mt"size="40" placeholder="Digite MT" class="classe_actual"><br><br>
			<center><input type="submit" size="40" value="Cadastrar" class="submit"></center>
			</fieldset>
			Professor:
			Eng.Biju Martins
		</form><p>