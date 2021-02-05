<?php

namespace Controller;

use Model\{UserManager};

class UserController {
    
    // verification des éléments de connexion au dashboard, appel à la fonction getUser permettant de récupérer les éléments en BDD, comparaison des éléments, redirection
    public function Connection()	{
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
			$user = $manager->getUser($_POST['login']); /*bcrypt*/
			if(($user and password_verify($_POST['pass'], $user->pass())) && ($user->admin() === "1")){
				$_SESSION['id'] = $user->id();
				$_SESSION['admin'] = $user->admin();
				$_SESSION['login'] = $user->login();
				header('location:index.php?action=Dashboard');
				return;
			} 
			else if($user and password_verify($_POST['pass'], $user->pass())){
				$_SESSION['id'] = $user->id();
				$_SESSION['login'] = $user->login();
				header('location:index.php?action=index');
				return;
			}

			else {
				$_SESSION['errors'] = 'Login ou mot de passe incorrect';
			}
		}
		header('location:index.php?action=Login');
		return;
	}

	public function Entry() {
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
		else {
			$password = $_POST['pass'];
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		}

		if($errors === 0) 
		{	
			$manager = new UserManager();
			$manager->StoreUser($_POST['login'], $hashed_password);
			
			$manager = new UserManager();
			$user = $manager->getUser($_POST['login']); /*bcrypt*/
			if(($user and password_verify($_POST['pass'], $user->pass())) && ($user->admin() === "1")){
				$_SESSION['id'] = $user->id();
				$_SESSION['admin'] = $user->admin();
				$_SESSION['login'] = $user->login();
				header('location:index.php?action=Dashboard');
				return;
			} 
			else if($user and password_verify($_POST['pass'], $user->pass())){
				$_SESSION['id'] = $user->id();
				$_SESSION['login'] = $user->login();
				header('location:index.php?action=index');
				return;
			}

			else {
				$_SESSION['errors'] = 'Login ou mot de passe incorrect';
			}
		}
		header('location:index.php?action=Login');
		return;

	
		
		
	}

	




		// arret de la session lors de la demande de deconnection depuis le dashboard, redirection
	public function Disconnection() {
		if(isset($_SESSION['admin']) or (isset($_SESSION['id'])) ) {
			unset($_SESSION);
			session_destroy();
			header('location:index.php');
			return;
		}
	}
}