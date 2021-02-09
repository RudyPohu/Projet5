<?php 

namespace Model;

class UserManager extends Bdd {

    // fonction permettant de récupérer le mdp en BDD
    public function getUser($login) {
        $this->getBDD();
        $req = $this->_db->prepare('SELECT * FROM users WHERE login = ?');
        $req->execute(array($login));
        $resultat = $req->fetch(\PDO::FETCH_ASSOC);
        if($resultat) {
            $user = new User($resultat);
            return $user;
        }
        return false;
        
        
    }

	public function StoreUser($login, $hashed_password) {
		$this->getBDD();
		$req = $this->_db->prepare('INSERT INTO users (login, pass) VALUES(?, ?)');
		$req->execute(array($login, $hashed_password));
		$req->closeCursor();
	}

    public function FindUser() {
        $this->getBDD();
        $req = $this->_db->prepare('SELECT * FROM users');
        $req->execute(array());
        $resultat = $req->fetch(\PDO::FETCH_ASSOC);
        $user = new User($resultat);
        return $user;
    }

}