<?php
session_start(); 

$action = $_GET['action'] ?? 'index';

require '../vendor/autoload.php'; // instanciation des class

$dotenv = Dotenv\Dotenv::createImmutable("../"); // fichier de configuration
$dotenv->load();

use Controller\{FrontController, UserController};

switch($action) {
	
	case 'index':
		$controller = new FrontController();
		$controller->index();
	break;

	case 'Destinations':
		$controller = new FrontController();
		$controller->Destinations();
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
}