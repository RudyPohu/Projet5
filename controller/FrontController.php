<?php

namespace Controller;

use Model\{PostManager};

class frontController {

	public function index()	{
		require "../view/HomePage.php";
	}

	public function Destinations() {

		$manager = new PostManager();
		$posts = $manager->getPost();
		require '../view/Destinations.php';
	}

	public function Login()	{
		require "../view/LoginPage.php";
	}

	// redirection vers le tableau de bord si la session est active
	public function Dashboard()
	{
		if(isset($_SESSION['id'])) {
			require "../view/Dashboard.php";
		} 
		else {
			header('location: index.php');
			return;
		}
	}
}
