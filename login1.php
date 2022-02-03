<?php
session_start();
include_once("validar.php");
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', 
    FILTER_SANITIZE_STRING);
//echo "$usuario - $senha";
if((!empty($usuario)) AND (!empty($senha))){
	//Gerar a senha criptografada
	//echo password_hash($senha, PASSWORD_DEFAULT);
	//Pesquisar o usuario no BD
	$result_usuario = "SELECT id, nome, usuario, senha FROM login2 WHERE usuario = '$usuario' LIMIT 1";
	$resultado_usuario = mysqli_query ($conn, $result_usuario);
	if($resultado_usuario){
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);
		if (password_verify($senha, $row_usuario ['senha'] )){
			$_SESSION ['id'] = $row_usuario ['id'];
			$_SESSION ['nome'] = $row_usuario ['nome'];
			$_SESSION ['usuario'] = $row_usuario ['usuario'];
      header("Location: minipauta.php");
	
	  }else{
	  	$_SESSION['msg'] = "<center><p style='color:red;'>Usuario e senha incorreto!</p></center>";
				header("Location: loga1.php");
			}

		}	
			}else{

			$_SESSION['msg'] = "<center><p style='color:red;'>Usuario e senha incorreto!</p></center>";
				header("Location: loga1.php");
			}