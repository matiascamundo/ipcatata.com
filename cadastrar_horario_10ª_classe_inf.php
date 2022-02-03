<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
<title>Cadastrar horário 10ª classe</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">		
	</head>
	<body>
		<center><H6>Cadastar hoarário 10ª classe informática</H6></center>
		<h2 align="center">Horário 10ª Classe Informática<h2>
		 
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="horario1.php">
			<fieldset>
<legend>Horário informática</legend>
			<center><label>Tempo: </label><br>
			<input type="text" name="tempo" size="40"placeholder="Digite o tempo"class="classe_actual"><Br><Br>

			<label>Segunga feira:</label><br>
			<input type="text" name="segunda" size="40"placeholder="Digite a disciplina "class="classe_actual"><br><br>

			<label>Terça feira:</label><br>
			<input type="text" name="terca" size="40"placeholder="Digite a disciplina"class="classe_actual"><br><br>

			<label>Quarta feira: </label><br>
			<input type="text" name="quarta" size="40"placeholder="Digite a disciplina"class="classe_actual"><br><br>
			<label>Quinta feira: </label><br>
			<input type="text" name="quinta" size="40"placeholder="Digite a disciplina"class="classe_actual"><br><br>
			<label>Sexta feira: </label><br>
			<input type="text" name="sexta" size="40"placeholder="Digite a disciplina"class="classe_actual"><br><br>
			<center><input type="submit" size="40" value="Cadastrar" class="submit"></center>
			</fieldset>
		</form><p>