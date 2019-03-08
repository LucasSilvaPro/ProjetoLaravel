<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function indexLogin(){
	 	$logins=\App\Login::all();
	 	return view('login', compact('logins'));
	}
	public function verificar(){
		session_start();
		$usuario=addslashes($_POST['usuario']);
		$senha=addslashes($_POST['senha']);
		if ($usuario=="admin" && $senha="12345admin") {
			$_SESSION['admin']==$usuario;
			header("Location: /");
		}else{
			echo"USUARIO OU SENHA INCORRETOS";
		}

	}
}
