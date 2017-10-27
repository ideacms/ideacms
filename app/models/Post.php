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
		return $this->belongsTo('Category');
	}

	public function tags() {
		return $this->belongsToMany('Tag');
	}


	// déclarations des propriétés
	// 
	// method nomduchamp() {
	//     return $this->property('type', true);
	// }
	// 
	// quel nom ?
	// property
	// content
	// field
	// 
	// parametre :
	// le type de donnée
	// (optionnel) unique ou non
	// 
	// 
	// 
	public function url() {
		return $this->content('string', true); 
	}

	public function age() {
		return $this->content('integer', true);
	}


	// déclartions de la gestion en admin ?? soit ici ou dans un dossier à part

}