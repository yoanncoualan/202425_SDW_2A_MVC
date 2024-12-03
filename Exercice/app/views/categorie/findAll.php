<?php

if(empty($categories)){
  echo '<p>Aucune catégorie</p>';
}
else{
  foreach ($categories as $c) {
    echo '<p><a href="/produit/byCategorie/'. $c->getSlug() .'" title="Afficher les produits de la catégorie">'. $c->getTitle() .'</a></p>';
  }
}