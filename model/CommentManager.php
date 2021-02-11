<?php

namespace Model;

class CommentManager extends Bdd {
   
	// fonction permettant l'affichage des commentaires associés à un chapitre
	public function getComments($id) {
		$this->getBDD();
		$donnees = [];
		$q = $this->_db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date FROM comments WHERE post_id = ? ');
		$q->execute(array($id));
		$comments = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($comments as $comment) {
		  	$donnees[] = new Comment($comment);
		}
		return $donnees;
	}

		// fonction permettant l'enregistrement d'un nouveau commentaire en BDD
	public function Store($post_id, $author, $comment) {
		$this->getBDD();
		$req = $this->_db->prepare('INSERT INTO comments (post_id, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
		$req->execute(array($post_id, $author, $comment));
		$req->closeCursor();
	}

	public function ListComments() {
		$this->getBDD();
		$donnees = [];
		$q = $this->_db->query('SELECT id, post_id, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date FROM comments ORDER BY post_id');
		$comments = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($comments as $comment) {
		  	$donnees[] = new Comment($comment);
		}
		return $donnees;
	}

	public function DeleteComment($id) {
		$this->getBDD();
		$req = $this->_db->prepare('DELETE FROM comments WHERE id = ?');
		$req->execute(array($id));
		$req->closeCursor();
	}
}