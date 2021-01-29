<?php
session_start(); 

$action = $_GET['action'] ?? 'index';

require '../vendor/autoload.php'; // instanciation des class

$dotenv = Dotenv\Dotenv::createImmutable("../"); // fichier de configuration
$dotenv->load();


use Controller\{FrontController, UserController, AdminController};

switch($action) {
	
	case 'index':
		$controller = new FrontController();
		$controller->index();
	break;

	case 'Posts':
		$controller = new FrontController();
		$controller->Posts();
	break;

	case 'OnePost':
		$controller = new FrontController();
		$controller->OnePost();
	break;

	case 'Map':
		$controller = new FrontController();
		$controller->GetMap();
	break;

	case 'Login':
		$controller = new FrontController();
		$controller->Login();
	break;

	case 'Connexion':
		$controller = new UserController();
		$controller->Connexion();
	break;

	case 'Dashboard':
		$controller = new FrontController();
		$controller->Dashboard();
	break;

	case 'NewPost':
		$controller = new AdminController();
		$controller->NewPost();
	break;

	case 'StorePost':
		$controller = new AdminController();
		$controller->StorePost();
	break;

	case 'ListPost':
		$controller = new AdminController();
		$controller->ListPost();
	break;

	case 'UpdatePost':
		$controller = new AdminController();
		$controller->UpdatePost();
	break;

	case 'Update':
		$controller = new AdminController();
		$controller->Update();
	break;

	case 'DeletePost':
		$controller = new AdminController();
		$controller->DeletePost();
	break;

	case 'Delete':
		$controller = new AdminController();
		$controller->Delete();
	break;

	case 'Disconnection':
		$controller = new UserController();
		$controller->Disconnection();
	break;

	
}

