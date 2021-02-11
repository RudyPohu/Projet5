<?php

namespace Model;

class PostManager extends Bdd {
	
	 // fonction permettant l'affichage des articles, limite de 3
	public function getThreePost() {
		$this->getBDD();
		$datas = [];
		$q = $this->_db->query('SELECT id, title, content, DATE_FORMAT(date_post, \'%d/%m/%Y\') AS date FROM posts ORDER BY id LIMIT 0, 3');
		$posts = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($posts as $post) {
		 	$thispost = new Post($post);
		 	array_push($datas, $thispost);
		}
		return $datas;
	}

	 // fonction permettant l'affichage des articles, limite de 10
	public function getPost() {
		$this->getBDD();
		$datas = [];
		$q = $this->_db->query('SELECT id, title, content, DATE_FORMAT(date_post, \'%d/%m/%Y\') AS date FROM posts ORDER BY id LIMIT 0, 20');
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

	// fonction permettant l'enregistrement d'un nouveau chapitre en BDD
	public function StorePost($title, $content) {
			// Insertion en base de données
			$this->getBDD();
			$req = $this->_db->prepare('INSERT INTO posts (title, content, date_post) VALUES(?, ?, NOW())');
			$req->execute(array($title, $content));
			$req->closeCursor();
	}

		// fonction permettant la modification d'un chapitre en BDD
	public function Update($id, $title, $content) {
		$this->getBDD();
		$req = $this->_db->prepare('UPDATE posts SET title = ?, content = ?  WHERE id = ?');
		$req->execute(array($title, $content, $id));
		$req->closeCursor();
	}

		// fonction permettant la suppression d'un chapitre en BDD
	public function Delete($id) {
		$this->getBDD();
		$req = $this->_db->prepare('DELETE FROM posts WHERE id = ?');
		$req->execute(array($id));
		$req->closeCursor();
	}
} 