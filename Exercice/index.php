<?php

require './vendor/autoload.php';
 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once './app/utils/Bdd.php';
require_once './app/orms/Categorie.php';
require_once './app/modeles/CategorieModel.php';

$cat = new CategorieModel();
$categories = $cat->findAll();

if(empty($categories)){
  echo '<p>Aucune catégorie</p>';
}
else{
  foreach ($categories as $une_categorie) {
    echo '<h2>'. $une_categorie->getTitle() .'</h2>';
  }
}

require_once './app/orms/Produit.php';
require_once './app/modeles/ProduitModel.php';

$p = new ProduitModel();
$produits = $p->findAll();

if(empty($produits)){
  echo '<p>Aucun produit</p>';
}
else{
  foreach ($produits as $un_produit) {
    echo '<h2>'. $un_produit->getTitle() .'</h2>';
    echo '<p>Catégorie : '. $un_produit->getCategorie()->getTitle() .'</p>';
  }
}