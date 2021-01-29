<?php

namespace Controller;

use Model\{PostManager, CommentManager};

class frontController {

	public function index()	{
		require "../view/FrontOffice/HomePage.php";
	}

	public function Posts() {
		$manager = new PostManager();
		$posts = $manager->getPost();
		require '../view/FrontOffice/Posts.php';
	}

	public function OnePost() {
		$id = $_GET['post_id'] ?? '';
		if($id == '') {
			header('location: index.php');
			return;
		}
		$manager = new PostManager();
		$post = $manager->getOnePost($id);
		$managerComments = new CommentManager();
		$comments = $managerComments->getComments($id);
		require '../view/FrontOffice/PostAndComments.php';	
	}

	public function GetMap() {
		require '../view/FrontOffice/MapPage.php';
	}

	public function Login()	{
		require "../view/FrontOffice/LoginPage.php";
	}

	public function Dashboard()
	{
		if(isset($_SESSION['id'])) {
			require "../view/BackOffice/Dashboard.php";
		} 
		else {
			header('location: index.php');
			return;
		}
	}
}
