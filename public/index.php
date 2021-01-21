<?php
session_start(); 

$action = $_GET['action'] ?? 'index';

require '../vendor/autoload.php'; // instanciation des class
use Controller\{FrontController};

switch($action) {
	
	case 'index':
		$controller = new FrontController();
		$controller->index();
	break;

}