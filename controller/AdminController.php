<?php

namespace Controller;

use Model\{PostManager, MarkerManager};

class AdminController {
    
    	//affichage de la page nouveau post du dashboard
	public function NewPost() {
		if(isset($_SESSION['admin'])) {
			require "../view/BackOffice/NewPost.php";
		}
		else {
			echo "Vous ne pouvez pas accéder à cette rubrique !";
		}
		
	}

		//appel à la fonction d'enregistrement en BDD d'un nouveau chapitre, vérification des champs
	public function StorePost() {
		$errors = 0;
		$error_messages = [];
		$_SESSION['errors'] = '';
		
		if(empty($_POST['title']) or mb_strlen($_POST['title']) <= 2 or mb_strlen($_POST['title']) > 249) {
			$errors++;
			$_SESSION['errors'] .= 'Le titre n\'a pas un format valide. ';
		}
		if(empty($_POST['content']) or mb_strlen($_POST['content']) <= 5) {
			$errors++;
			$_SESSION['errors'] .= 'Le contenu du chapitre n\'a pas un format valide.';
		}
		if($errors === 0) {
			$manager = new PostManager();
			$manager->StorePost($_POST['title'], $_POST['content']);
			header('location: index.php?action=ListPost');
		} 
		else {
			header('location: index.php?action=dashboard');
			return;
		}
	}

	    //appel à la fonction d'affichage des chapitres dans la page db_post du dashboard, condition de connexion
    public function ListPost() {
		if(isset($_SESSION['admin'])) {
			$manager = new PostManager();
			$posts = $manager->getPost();
			require '../view/BackOffice/ListPost.php';
		} else {
			echo "Vous ne pouvez pas accéder à cette rubrique !";
		}
	}

		//appel à la fonction d'affichage de la page du chapitre à modifier dans le dashboard
	public function UpdatePost() {
		if(isset($_SESSION['admin'])) {
			$id = $_GET['Post_id'] ?? '';
			$manager = new PostManager();
			$post = $manager->getOnePost($id);
			require "../view/BackOffice/UpdatePost.php";
		} 
		else {
			echo "Vous ne pouvez pas accéder à cette rubrique !";
		}
	}
	
	// appel à la fonction de modification d'un chapitre en BDD
	public function Update() {
		$errors = 0;
		$error_messages = [];
		$_SESSION['errors'] = '';
		
		if(empty($_POST['title']) or mb_strlen($_POST['title']) <= 2 or mb_strlen($_POST['title']) > 249) {
			$errors++;
			$_SESSION['errors'] .= 'Le titre n\'a pas un format valide. ';
		}
		if(empty($_POST['content']) or mb_strlen($_POST['content']) <= 5) {
			$errors++;
			$_SESSION['errors'] .= 'Le contenu du chapitre n\'a pas un format valide.';
		}
		if($errors === 0) {
			$manager = new PostManager(); 
			$manager->Update($_POST['id'], $_POST['title'], $_POST['content']);
			header('location: index.php?action=ListPost');
		} 
		else {
			header('location: index.php?action=listPost');
			return;
		}
	}

		//appel à la fonction d'affichage de la page du chapitre à supprimer dans le dashboard
	public function DeletePost() {
		if(isset($_SESSION['admin'])) {
			$id = $_GET['Post_id'] ?? '';
			$manager = new PostManager();
			$post = $manager->getOnePost($id);
			require "../view/BackOffice/DeletePost.php";
		} 
		else {
			echo "Vous ne pouvez pas accéder à cette rubrique !";
		}
	}

	// appel à la fonction de suppression du chapitre en BDD
	public function Delete() {		
		if(isset($_SESSION['admin'])) {
			$id = $_GET['Post_id'] ?? '';	
			$manager = new PostManager(); 
			$manager->Delete($id);
			header('location: index.php?action=ListPost');	
		}
		else {
			header('location: index.php?action=ListPost');
			return;
		}
	}

	public function NewMarker() {
		require "../view/BackOffice/NewMarker.php";
	}

			//appel à la fonction d'enregistrement en BDD d'un marker, vérification des champs
	public function StoreMarker() {
		$errors = 0;
		$error_messages = [];
		$_SESSION['errors'] = '';
		
		if(empty($_POST['name']) or mb_strlen($_POST['name']) <= 2 or mb_strlen($_POST['name']) > 249) {
			$errors++;
			$_SESSION['errors'] .= 'Le nom de votre destination n\'a pas un format valide. ';
		}
		if(empty($_POST['lat'])) {
			$errors++;
			$_SESSION['errors'] .= 'La latitude de votre destination n\'est pas renseignée. ';
		}
		if(empty($_POST['lon'])) {
			$errors++;
			$_SESSION['errors'] .= 'La longitude de votre destination n\'est pas renseignée. ';
		}
		// if(empty($_POST['img'])) {
		// 	$errors++;
		// 	$_SESSION['errors'] .= 'Veuillez insérer une photo de votre destination. ';
		// }
		if(empty($_POST['content']) or mb_strlen($_POST['content']) <= 5) {
			$errors++;
			$_SESSION['errors'] .= 'Le contenu de la destination n\'a pas un format valide.';
		}
		if($errors === 0) {
			$manager = new MarkerManager();
			$manager->StoreMarker($_POST['name'], $_POST['lat'], $_POST['lon'], $_POST['content']);
			header('location: index.php?action=Map');
		} 
		else {
			header('location: index.php?action=Dashboard');
			return;
		}
	}

}