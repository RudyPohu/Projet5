<?php

namespace Model;

class MarkerManager extends Bdd {
   
	public function StoreMarker($name, $lat, $lon, $link, $content) {
		$this->getBDD();
		$req = $this->_db->prepare('INSERT INTO markers (name, lat, lon, link, content, date_marker) VALUES(?, ?, ?, ?, ?, NOW())');
		$req->execute(array($name, $lat, $lon, $link, $content));
		$req->closeCursor();
	}

	public function GetMarkers() {
		$this->getBDD();
		$datas = [];
		$q = $this->_db->query('SELECT * FROM markers');
		$markers = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($markers as $marker) {
		 	$thismarker = new Marker($marker);
		 	array_push($datas, $thismarker);
		}
		return $datas;
	}

	public function GetOneMarker($id) {
		$this->getBDD();
		$req = $this->_db->prepare('SELECT * FROM markers WHERE id = ?');
		$req->execute(array($id));
		$thisdata = $req->fetch(\PDO::FETCH_ASSOC);
		$Marker = new Marker($thisdata);
		return $Marker;
	}

	public function UpdateOneMarker($id, $name, $lat, $lon, $link, $content) {
		$this->getBDD();
		$req = $this->_db->prepare('UPDATE markers SET name = ?, lat = ?, lon = ?, link = ?, content = ? WHERE id = ?');
		$req->execute(array($name, $lat, $lon, $link, $content, $id));
		$req->closeCursor();
	}

	public function DeleteMarker($id) {
		$this->getBDD();
		$req = $this->_db->prepare('DELETE FROM markers WHERE id = ?');
		$req->execute(array($id));
		$req->closeCursor();
	}
}