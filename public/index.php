<?php
session_start(); 

$action = $_GET['action'] ?? 'index';

require '../vendor/autoload.php'; // instanciation des class

$dotenv = Dotenv\Dotenv::createImmutable("../"); // fichier de configuration
$dotenv->load();

?>
	<script type="text/javascript" src="js/map.js"></script>
<?php



use Controller\{FrontController, UserController};

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
}

