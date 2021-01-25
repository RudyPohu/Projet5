<?php

namespace Controller;

use Model\UserManager;

class UserController {
    
    // verification des éléments de connexion au dashboard, appel à la fonction getUser permettant de récupérer les éléments en BDD, comparaison des éléments, redirection
    public function Connexion()	{
		$errors = 0;
		$error_messages = [];
		$_SESSION['errors'] = '';

		if(empty($_POST['login']) or mb_strlen($_POST['login']) <= 2 or mb_strlen($_POST['login']) > 249) {
			$errors++;
			$_SESSION['errors'] .= 'Le login n\'a pas un format valide. ';
		}

		if(empty($_POST['pass']) or mb_strlen($_POST['pass']) <= 3) {
			$errors++;
			$_SESSION['errors'] .= 'Le mot de passe n\'a pas un format valide.';
		}

		if($errors === 0) 
		{	
			$manager = new UserManager();
			$manager->getUser($_POST['login']); 
			if($user and password_verify($_POST['pass'], $user->pass())) {
				$_SESSION['id'] = $user->id();
				$_SESSION['login'] = $user->login();
				header('location:index.php?action=Dashboard');
				return;
			} 
			else {
				$_SESSION['errors'] = 'Login ou mot de passe incorrect';
			}
		}
		header('location:index.php?action=Login');
		return;
	}
}