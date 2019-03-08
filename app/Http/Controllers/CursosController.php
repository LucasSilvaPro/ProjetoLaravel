<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
	public function mostrarCursos(){
		$cursos=\App\Cursos::all();
		return view('cursos', compact('cursos'));
	}
	public function paginaCurso(){
		$cursos=\App\Cursos::all();
		return view('adicionarCurso', compact('cursos'));	
	}
	public function adicionando(Request $request){
		\App\Cursos::create($request->all());
		return back();
	}
	public function atualizar(Request $request, \App\Cursos $curso){
		$curso->update($request->all());
		return back();
	}
	public function apagarCurso(\App\Cursos $curso){
		$curso->delete();
		return back();
	}
	
}
