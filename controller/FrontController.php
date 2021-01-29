<?php

namespace Controller;

use Model\{PostManager, CommentManager};

class frontController {

	public function index()	{
		require "../view/HomePage.php";
	}

	public function Posts() {
		$manager = new PostManager();
		$posts = $manager->getPost();
		require '../view/Posts.php';
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
		require '../view/PostAndComments.php';	
	}

	public function GetMap() {
		?>
			<script type="text/javascript">
				window.onload = function() {
					map.initMap();
				}
			</script>
		<?php
		require '../view/MapPage.php';
	}

	public function Login()	{
		require "../view/LoginPage.php";
	}

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
