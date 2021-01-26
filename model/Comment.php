<?php

namespace Model;

class Comment {
	
	private $_id;
	private $_post_id;
	private $_author;
	private $_comment;
	private $_date_comment;

	public function __construct(array $donnees) {
		foreach($donnees as $key =>$donnee) {
			$method = 'set'.ucfirst($key);
			$this->$method($donnee);
		}
	}

	// guetteurs
	public function id() {
		return $this->_id;
	}

	public function _post_id() {
		return $this->_post_id;
	}

	public function author() {
		return $this->_author;
	}

	public function comment() {
		return $this->_comment;
	}

	public function getDate() {
		return $this->_date_comment;
	}



	// setteurs
	public function setId($id) {
		$this->_id = $id;
	}

	public function setPost_id($post_id) {
		$this->_post_id = $post_id;
	}

	public function setAuthor($author) {
		$this->_author = $author;
	}

	public function setComment($comment) { 
		$this->_comment = $comment;
	}

	public function setDate($_date_comment) {
		$this->_date_comment = $_date_comment;
	}


}