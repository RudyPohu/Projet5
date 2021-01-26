<?php

namespace Model;

class Post {
	
	public $_id;
	public $_title;
	public $_content;
	public $_date_post;

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

	public function title()	{
		return $this->_title;
	}

	public function content() {
		return $this->_content;
	}

	public function getDate() {
		return $this->_date_post;
	}

	//setters
	public function setId(int $id) {
		$this->_id = $id;
	}

	public function setTitle($title) {
		if(mb_strlen($title) >= 3) 
			$this->_title = $title;
	}

	public function setContent($content) {
		$this->_content = $content;
	}

	public function setDate($date_post) {
		$this->_date_post = $date_post;
	}


}