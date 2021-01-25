<?php

namespace Model;

class PostManager extends Bdd {
	
	 // fonction permettant l'affichage des articles, limite de 10
	public function getPost() {
		$this->getBDD();
		$datas = [];
		$q = $this->_db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date FROM destinations ORDER BY date_creation LIMIT 0, 10');
		$posts = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($posts as $post) {
		 	$thispost = new Post($post);
		 	array_push($datas, $thispost);
		}
		return $datas;
	}


} 