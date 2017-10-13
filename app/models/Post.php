<?php

namespace App;
// Mise en place d'un model


/**
*  Un model
*/
class Post extends Model
{

	// déclarations des relations
	public function category() {
		return $this->belongsTo('App/Categroy');
	}

	public function tags() {
		return $this->belongsToMany('App/Tag');
	}


	// déclarations des propriétés
	public function url() {
		return $this->int()->single();
	}

}