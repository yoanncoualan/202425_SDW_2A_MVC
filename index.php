<?php

// Chargement de l'autoload de vendor
require './vendor/autoload.php';
// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
 
// Chargement de nos class
require_once './app/utils/Bdd.php';
require_once './app/models/User.php';
require_once './app/models/UserModel.php';

require_once './app/utils/Router.php';

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);