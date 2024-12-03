<?php

class CategorieModel extends Bdd{
  public function findAll(): array
  {
    $sql = 'SELECT * FROM categorie';
    $resultat = $this->prepareExecute($sql);

    $categories = $resultat->fetchAll(PDO::FETCH_CLASS, 'Categorie');

    return $categories;
  }
}