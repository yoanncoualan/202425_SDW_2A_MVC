<?php

class CategorieController{
  public function findAll(){
    $categorieModel = new CategorieModel();
    $categories = $categorieModel->findAll();

    require_once './app/views/categorie/findAll.php';
  }
}