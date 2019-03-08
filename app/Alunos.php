<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable=[
		'nome_aluno','curso_id','email_aluno','imagem'
	];
	public function getId(){return $this->id;}
	public function getNome_Aluno(){return $this->nome_aluno;}
	public function getCurso_Id(){return $this->curso_id;}
	public function getEmail_Aluno(){return $this->email_aluno;}
}
