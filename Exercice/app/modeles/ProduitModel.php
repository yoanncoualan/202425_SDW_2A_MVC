<?php

class ProduitModel extends Bdd{
  public function findAll(): array
  {
    $sql = 'SELECT p.id AS p_id, p.title AS p_title, p.slug AS p_slug, p.content AS p_content, c.id AS c_id, c.title AS c_title, c.slug AS c_slug FROM produit p INNER JOIN categorie c ON p.categorie_id = c.id';
    $resultat = $this->prepareExecute($sql);

    $produits = $resultat->fetchAll(PDO::FETCH_OBJ);

    $produits_as_obj = [];
    // Parcours du résultat de la requête
    foreach ($produits as $un_produit) {
      // Création de l'objet Categorie et hydratation
      $categorie = new Categorie();
      $categorie->setTitle($un_produit->c_title)
        ->setSlug($un_produit->c_slug);
      
      // Création de l'objet Produit et hydratation
      $produit = new Produit();
      $produit->setTitle($un_produit->p_title)
        ->setContent($un_produit->p_content)
        ->setSlug($un_produit->p_slug)
        ->setCategorie($categorie);
    
      // Sauvegarde dans le tableau du produit en cours
      $produits_as_obj[] = $produit;
    }

    return $produits_as_obj;
  }
}