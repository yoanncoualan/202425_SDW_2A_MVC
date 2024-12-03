<h1>Login</h1>
<p>
  <?php 
    if($logged == true){
      echo 'Connecté';
    }
    else{
      echo 'Pas connecté';
    }
  ?>
</p>

<form action="/user/login" method="POST">
  <label for="email">Email : </label>
  <input type="email" name="email" id="email" placeholder="john.doe@gmail.com">
  <br>
  <label for="pwd">Mot de passe : </label>
  <input type="password" name="pwd" id="pwd">
  <br>
  <input type="submit" name="log_user" value="Se connecter">
</form>

<?php
  if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])){
    foreach ($_SESSION['errors'] as $key => $erreur) {
      echo '<p>'. $erreur .'</p>';
      unset($_SESSION['errors'][$key]);
    }
  }
?>