<?php

namespace Model;

class User {
	
	private $_id;
	private $_login;
	private $_pass;

	public function __construct(array $datas) {
		foreach($datas as $key =>$data) {
			$method = 'set'.ucfirst($key);	
			$this->$method($data); 
		}
	}

	public function id() {
		return $this->_id;
	}

	public function login() {
		return $this->_login;
	}

	public function pass() {
		return $this->_pass;
	}

	public function setId(int $id) {
		$this->_id = $id;
	}

	public function setLogin($login) {
			$this->_login = $login;
	}

	public function setPass($pass) {
		$this->_pass = $pass;
	}

}