<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro para 11ª Classe</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">		
	</head>
	<body>
		<H6 align="center">Matrícula 11ª Classe</H6>
	
	<center>
	<img src="IMG/IMPC.jpg" width="300" height="250">
</center>
	<center><h1>Instituto Politécnico da Catata nº257<h1></center>

	<h2 align="center">Confirmação de matrícula para 11ª Classe<h2>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<fieldset>
<legend>Informações Pessoais</legend>
			<center><label>Nome: </label><br>
			<input type="text" name="nome" size="40"placeholder="Digite o nome completo"class="classe_actual"><br><br>

			<label>E-mail: </label><br>
			<input type="email" name="email" size="40" placeholder="Digite o seu melhor e-mail"class="classe_actual"><br><br>

			<label>Endereço: </label><br>
			<input type="text" name="endereco" size="40"placeholder="Digite o seu endereço"class="classe_actual"><br><br>

			<label>Número de telefone: </label><br>
			<input type="text" name="telefone" size="40"placeholder="Digite o seu Telefone"class="classe_actual"><br><br>

			<label>Classe actual: </label><br>
			<input type="text" name="classe"size="40" placeholder="Digite 11ª classe " class="classe_actual"><br><br>

			<label>Curso:</label><br>
			<input type="text" name="curso" size="40"
			placeholder="Digite o teu curso"class="classe_actual"><br><br>
			<label>Ano lectivo:</label><br>
			<input type="text" name="lectivo" size="40"
			placeholder="Digite o ano lectivo"class="classe_actual"><br><br>
			<center><input type="submit" size="40" value="Cadastrar" class="submit"></center>
</fieldset>
		</form><p>
		<center>
	<img src="IMG/emis4.jpg" width="150" height="80">
	<img src="IMG/emis5.jpg" width="150" height="80">
</center>
			<center><p class="letra">Forma de pagamento da matrícula</p>
			<p class="letra">Iban:0000.0000.0000.0000.0000.0</p>
			<p class="letra">Enviar o comprovativo de pagamento e uma cópia do BI via whatsap nº 923662842</p>
			<p class="letra">(A matricula só é válida após se confirmar o comprovativo do pagamento)</p>
		</center>
			
	</body>
</html>