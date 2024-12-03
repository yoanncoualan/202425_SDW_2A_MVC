<?php

if ($user) {
  echo '<h1>'. $user->getEmail() .'</h1>';
}
else{
  echo '<p>Utilisateur introuvable</p>';
}