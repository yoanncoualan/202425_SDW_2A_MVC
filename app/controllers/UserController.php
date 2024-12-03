<?php

class UserController{
  public function findAll(): void
  {
    $userModel = new UserModel();
    $users = $userModel->findAll();
 
    require_once './app/views/user/all.php';
  }
 
  public function findOneById(int $id): void
  {
    $userModel = new UserModel();
    $user = $userModel->findOneById($id);
 
    require_once './app/views/user/one.php';
  }

  public function create(): void
  {
    require_once './app/views/user/create.php';
  }

  public function save()
  {
    if(empty(trim($_POST['email']))){
      die('<p>Email obligatoire</p>');
    }
    if(empty(trim($_POST['pwd']))){
      die('<p>Mot de passe obligatoire</p>');
    }

    $userModel = new UserModel();
    $add = $userModel->save($_POST);

    if($add > 0){
      header('location: /user');
    }
    else{
      die('<p>Une erreur est survenue</p>');
    }
  }
}