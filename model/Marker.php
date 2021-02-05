<?php

namespace Model;

class Marker {
	
	public $_id;
	public $_name;
	public $_lat;
	public $_lon;
	// public $_img;
	public $_content;
	public $_date_marker;

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

	public function name()	{
		return $this->_name;
	}

	public function lat()	{
		return $this->_lat;
	}

	public function lon()	{
		return $this->_lon;
	}

	// public function img()	{
	// 	return $this->_img;
	// }

	public function content() {
		return $this->_content;
	}

	public function getDate() {
		return $this->_date_marker;
	}

	//setters
	public function setId(int $id) {
		$this->_id = $id;
	}

	public function setName($name) {
		if(mb_strlen($name) >= 3) 
			$this->_name = $name;
	}

	public function setLat($lat) {
			$this->_lat = $lat;
	}
		public function setLon($lon) {
			$this->_lon = $lon;
	}
	// 	public function setImg($img) {
	// 		$this->_img = $img;
	// }
	public function setContent($content) {
		$this->_content = $content;
	}

	public function setDate_marker($date_marker) {
		$this->_date_marker = $date_marker;
	}


}