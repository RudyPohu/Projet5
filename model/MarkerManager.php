<?php

namespace Model;

class MarkerManager extends Bdd {
   
	public function StoreMarker($name, $lat, $lon, $content) {
		$this->getBDD();
		$req = $this->_db->prepare('INSERT INTO markers (name, lat, lon, content, date_marker) VALUES(?, ?, ?, ?, NOW())');
		$req->execute(array($name, $lat, $lon, $content));
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
}