<?php

namespace Model;

class CommentManager extends Bdd {
   
	// fonction permettant l'affichage des commentaires associés à un chapitre
	public function getComments($id) {
		$this->getBDD();
		$donnees = [];
		$q = $this->_db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date FROM comments WHERE post_id = ?');
		$q->execute(array($id));
		$comments = $q->fetchAll(\PDO::FETCH_ASSOC);
		$q->closeCursor();
		foreach($comments as $comment) {
		  	$donnees[] = new Comment($comment);
		}
		return $donnees;
	}
}