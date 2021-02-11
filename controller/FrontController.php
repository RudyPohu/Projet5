<?php

namespace Controller;

use Model\{PostManager, CommentManager, MarkerManager, UserManager};

class frontController {

	private $postManager;
	private $userManager;
	private $commentManager;
	private $markerManager;

	public function __construct() {
		$this->postManager = new PostManager();
		$this->userManager = new UserManager();
		$this->commentManager = new CommentManager();
		$this->markerManager = new MarkerManager();
	}

	public function index()	{
		$posts = $this->postManager->getThreePost();
		
		if(isset($_SESSION['admin']) or (isset($_SESSION['id'])) ) {
			$user = $this->userManager->FindUser();
			require "../view/FrontOffice/HomePage.php";
		} 
		else {
			require "../view/FrontOffice/HomePage.php";
		}		
	}

	public function Posts() {
		$posts = $this->postManager->getPost();
		require '../view/FrontOffice/Posts.php';
	}

	public function OnePost() {
		$id = $_GET['post_id'] ?? '';
		if($id == '') {
			header('location: index.php');
			return;
		}
		$manager = new PostManager();
		$post = $this->postManager->getOnePost($id);
		$comments = $this->commentManager->getComments($id);
		require '../view/FrontOffice/PostAndComments.php';	
	}

	public function GetMap() {
		require '../view/FrontOffice/MapPage.php';
	}

	public function GetMarkers(){
		$Markers = $this->markerManager->GetMarkers();
		echo json_encode($Markers);
	}

	public function StoreComment()
	{
		$errors = 0;
		$error_messages = [];
		$_SESSION['errors'] = '';
		
		if(empty($_POST['author']) or mb_strlen($_POST['author']) <= 2 or mb_strlen($_POST['author']) > 249) {
			$errors++;
			$_SESSION['errors'] .= 'L\'auteur n\'a pas un format valide.';
		}
		if(empty($_POST['comment']) or mb_strlen($_POST['comment']) <= 5) {
			$errors++;
			$_SESSION['errors'] .= 'Le commentaire n\'a pas un format valide.';
		}
		if(empty($_POST['post_id']) or !is_numeric($_POST['post_id'])) {
			$errors++;
			$_SESSION['errors'] .= 'erreur d\'id';
		}

		if($errors === 0) {
			$this->commentManager->Store($_POST['post_id'], $_POST['author'], $_POST['comment']);
			header('location: index.php?action=OnePost&post_id='.$_POST['post_id']);
		} 
		else {
			header('location: index.php?action=OnePost&post_id='.$_POST['post_id']);
			return;
		}
	}

	public function Login()	{
		require "../view/FrontOffice/LoginPage.php";
	}

	public function Dashboard()
	{
		if(isset($_SESSION['admin'])) {
			require "../view/BackOffice/Dashboard.php";
		} 
		else {
			header('location: index.php');
			return;
		}
	}
}
