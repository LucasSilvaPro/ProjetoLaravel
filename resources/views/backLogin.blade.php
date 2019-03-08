<?php
	session_start();
	$usuario=addslashes($_POST['usuario']);
	$senha=addslashes($_POST['senha']);
	if ($usuario=="admin" && $senha="12345admin") {
		$_SESSION['admin']==$usuario;
		header("Location: /");
	}else{
		echo"USUARIO OU SENHA INCORRETOS";
	}	
?>
