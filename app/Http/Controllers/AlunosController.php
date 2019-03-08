<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function mostrarAlunos(){
    	$alunos=\App\Alunos::all();
    	return view('alunos', compact('alunos'));
    }
    public function paginaAdicionar(){
    	$alunos=\App\Alunos::all();
    	return view('adicionarAluno', compact('alunos'));
    }
    public function adicionarAluno(Request $request){
    	\App\Alunos::create($request->all());
    	return back();
    }
    public function atualizarAluno(Request $request,\App\Alunos $aluno){
        $aluno->update($request->all());
        return back();
    }
    public function deletarAluno(\App\Alunos $aluno){
    	$aluno->delete();
    	return back();
    }
    public function busca(Request $request){
        $alunos=\App\Alunos::where('nome_aluno','LIKE','%'.$request->pesquisa.'%')->get();
        return view('alunos',[
            'alunos'=>$alunos,
            'busca'=>$request->busca
        ]);
    }
}

