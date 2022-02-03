<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro pauta geral</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">		
	</head>
	<body>
		<H6 align="center">Cadastro pauta de aproveitamento final 11ª</H6>

	<h2 align="center">Cadastro pauta geral para 11ª Classe<h2>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processar.php">
			<fieldset>
<legend>Informações Pessoais</legend>
			<center><label>Nome: </label><br>
			<input type="text" name="nome" size="40"placeholder="Digite o nome completo"class="classe_actual"><br><br>

			<label>TIC: </label><br>
			<input type="email" name="email" size="40" placeholder="Digite TIC"class="classe_actual"><br><br>

			<label>L.Potuguesa: </label><br>
			<input type="text" name="L.portuguesa" size="40"placeholder="Digite L.Potuguesa"class="classe_actual"><br><br>

			<label>L.Inglesa: </label><br>
			<input type="text" name="L.inglesa" size="40"placeholder="Digite L.Inglesa "class="classe_actual"><br><br>

			<label>FAI: </label><br>
			<input type="text" name="FAI"size="40" placeholder="Digite FAI" class="classe_actual"><br><br>

			<label>Educação Física:</label><br>
			<input type="text" name="Educação Física" size="40"
			placeholder="Digite Educação Física"class="classe_actual"><br><br>
			
            <label>Química:</label><br>
			<input type="text" name="Química" size="40"
			placeholder="Digite Química"class="classe_actual"><br><br>
			 <label>Electrótenia:</label><br>
			<input type="text" name="Electrótenia" size="40"
			placeholder="Digite Electrótenia"class="classe_actual"><br><br>
			 <label>Desenho técnico:</label><br>
			<input type="text" name="Desenho técnico" size="40"
			placeholder="Digite Desenho técnico"class="classe_actual"><br><br>
			 <label>Matemática:</label><br>
			<input type="text" name="Matemática" size="40"
			placeholder="Digite Matemática"class="classe_actual"><br><br>
			 <label>Física:</label><br>
			<input type="text" name="fisica" size="40"
			placeholder="Digite Física"class="classe_actual"><br><br>
			<label>O.G.I:</label><br>
			<input type="text" name="O.G.I" size="40"
			placeholder="Digite O.G.I"class="classe_actual"><br><br>
			<label>Empeendedorismo:</label><br>
			<input type="text" name="Empeendedorismo" size="40"
			placeholder="Digite Empeendedorismo "class="classe_actual"><br><br>
			<label>T.L.P:</label><br>
			<input type="text" name="T.L.P" size="40"
			placeholder="Digite T.L.P"class="classe_actual"><br><br>
			<label>S.E.A.C:</label><br>
			<input type="text" name="T.L.P" size="40"
			placeholder="Digite S.E.A.C"class="classe_actual"><br><br>
			<label>P.T:</label><br>
			<input type="text" name="T.L.P" size="40"
			placeholder="Digite P.T"class="classe_actual"><br><br>
			<label>Exame:</label><br>
			<input type="text" name="T.L.P" size="40"
			placeholder="Digite Exame"class="classe_actual"><br><br>
			<label>Resultado:</label><br>
			<input type="text" name="T.L.P" size="40"
			placeholder="Digite Resultado"class="classe_actual"><br><br>






			<center><input type="submit" size="40" value="Cadastrar" class="submit"></center>
			</fieldset>
		</form><p>
		
	</body>
</html>