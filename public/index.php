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

	case 'Markers':
		$controller = new FrontController();
		$controller->GetMarkers();
	break;

	case 'StoreComment':
		$controller = new FrontController();
		$controller->StoreComment();
	break;	

	case 'Login':
		$controller = new FrontController();
		$controller->Login();
	break;

	case 'Entry':
		$controller = new UserController();
		$controller->Entry();
	break;

	case 'Connection':
		$controller = new UserController();
		$controller->Connection();
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

	case 'ListMarkers':
		$controller = new AdminController();
		$controller->GetListMarkers();
	break;

	case 'NewMarker':
		$controller = new AdminController();
		$controller->NewMarker();
	break;

	case 'StoreMarker':
		$controller = new AdminController();
		$controller->StoreMarker();
	break;	

	case 'UpdateMarker':
		$controller = new AdminController();
		$controller->UpdateMarker();
	break;

	case 'UpdateOneMarker':
		$controller = new AdminController();
		$controller->UpdateOneMarker();
	break;

	case 'DeleteMarker':
		$controller = new AdminController();
		$controller->DeleteMarker();
	break;

	case 'ListComments':
		$controller = new AdminController();
		$controller->ListComments();
	break;

	case 'DeleteComment':
		$controller = new AdminController();
		$controller->DeleteComment();
	break;

	case 'Disconnection':
		$controller = new UserController();
		$controller->Disconnection();
	break;

	default:
		$controller = new FrontController();
		$controller->ErrorPage();
	break;
}

