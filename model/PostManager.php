<?php

namespace Model;

class PostManager extends Bdd {
	
	 // fonction permettant l'affichage des articles, limite de 10
	public function getPost() {
		$this->getBDD();
		$datas = [];
		$q = $this->_db->query('SELECT id, title, content, DATE_FORMAT(date_post, \'%d/%m/%Y\') AS date FROM posts ORDER BY id LIMIT 0, 10');
		$posts = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($posts as $post) {
		 	$thispost = new Post($post);
		 	array_push($datas, $thispost);
		}
		return $datas;
	}

	public function getOnePost($id) {
		$this->getBDD();
		$req = $this->_db->prepare('SELECT id, title, content, DATE_FORMAT(date_post, \'%d/%m/%Y\') AS date FROM posts WHERE id = ?');
		$req->execute(array($id));
		$thisdata = $req->fetch(\PDO::FETCH_ASSOC);
		$Post = new Post($thisdata);
		return $Post;
	}
} 