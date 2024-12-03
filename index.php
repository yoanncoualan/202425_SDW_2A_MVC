<?php
session_start();

// Chargement de l'autoload de vendor
require './vendor/autoload.php';
// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
 
// Chargement de notre autoload
require_once './app/utils/Autoload.php';
// Appel de la méthode register qui va recenser notre autoload
Autoload::register();

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);