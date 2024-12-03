<?php

class ProduitController{
  public function byCategorie(string $categorie_slug){
    $produitModel = new ProduitModel();
    $produits = $produitModel->findByCategorie($categorie_slug);

    require_once './app/views/produit/byCategorie.php';
  }

  public function bySlug(string $produit_slug){
    $produitModel = new ProduitModel();
    $produit = $produitModel->findBySlug($produit_slug);

    if(empty($produit)){
      header('location: /exception/notfound');
    }

    require_once './app/views/produit/bySlug.php';
  }
}