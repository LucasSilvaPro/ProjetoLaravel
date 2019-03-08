<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
	protected $fillable=[
		'usuario','senha'
	];
	public function getId(){return $this->id;}
	public function getUsuario(){return $this->usuario;}
	public function getSenha(){return $this->senha;}
}	
