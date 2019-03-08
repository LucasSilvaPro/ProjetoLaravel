<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/Login','LoginController@indexLogin')->name('indexLogin');
Route::post('/backLogin','LoginController@verificar')->name('verificar');

Route::get('/Cursos','CursosController@mostrarCursos')->name('mostrarLogin');
Route::post('/adicionando','CursosController@adicionando')->name('adicionando');
Route::get('/adicionarCurso','CursosController@paginaCurso')->name('paginaCurso');
Route::get('/Cursos/{curso}','CursosController@atualizar')->name('atualizar');
Route::get('/Cursos/Deletar/{curso}','CursosController@apagarCurso')->name('apagarCurso');

Route::get('/Alunos','AlunosController@mostrarAlunos')->name('mostrarAlunos');
Route::get('/adicionarAluno','AlunosController@paginaAdicionar')->name('paginaAdicionar');
Route::post('/adicionandoA','AlunosController@adicionarAluno')->name('adicionandoA');
Route::get('/Alunos/Atualizar/{aluno}','AlunosController@atualizarAluno')->name('atualizarAluno');
Route::get('/Alunos/Apagar/{aluno}','AlunosController@deletarAluno')->name('deletar');
Route::post('/Alunos','AlunosController@busca')->name('busca');
