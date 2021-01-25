<?php

namespace Model;

class Post {
	
	public $_id;
	public $_titre;
	public $_contenu;
	public $_date;

	public function __construct(array $datas) {
		foreach($datas as $key =>$data) {
			$method = 'set'.ucfirst($key);	
			$this->$method($data); 
		}
	}

	// getters
	public function id() {
		return $this->_id;
	}

	public function titre()	{
		return $this->_titre;
	}

	public function contenu() {
		return $this->_contenu;
	}

	public function getDate() {
		return $this->_date;
	}

	//setters
	public function setId(int $id) {
		$this->_id = $id;
	}

	public function setTitre($titre) {
		if(mb_strlen($titre) >= 3) 
			$this->_titre = $titre;
	}

	public function setContenu($contenu) {
		$this->_contenu = $contenu;
	}

	public function setDate($date) {
		$this->_date = $date;
	}


}