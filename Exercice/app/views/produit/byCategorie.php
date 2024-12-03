<?php

if(empty($produits)){
  echo '<p>Aucun produit</p>';
}
else{
  foreach ($produits as $p) {
    echo '<p><a href="/produit/bySlug/'. $p['slug'] .'" title="Afficher le produit">'. $p['title'] .'</a></p>';
  }
}