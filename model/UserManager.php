<?php 

namespace Model;

class UserManager extends Bdd {

    // fonction permettant de récupérer le user et le mdp en BDD
    public function getUser($login) {
        $this->getBDD();
        $req = $this->_db->prepare('SELECT * FROM Users WHERE login = ?');
        $req->execute(array($login));
        $resultat = $req->fetch(\PDO::FETCH_ASSOC);
        $user = new User($resultat);
        return $user;
    }
}