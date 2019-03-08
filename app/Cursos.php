<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable=[
    	'nome_curso','status_curso'
    ];

    public function getId(){return $this->id;}
    public function getNome_Curso(){return $this->nome_curso;}
    public function getStatus_Curso(){return $this->status_curso;}
}
