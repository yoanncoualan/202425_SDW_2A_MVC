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

  public function login(): void
  {
    $logged = false;
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
      $logged = true;
    }

    if(isset($_POST['log_user'])){
      if(empty(trim($_POST['email']))){
        $_SESSION['errors'][] = 'Email obligatoire';
      }
      if(empty(trim($_POST['pwd']))){
        $_SESSION['errors'][] = 'Mot de passe obligatoire';
      }

      $userModel = new UserModel();
      $login = $userModel->login($_POST);

      if($login == true){
        $logged = true;
      }
    }

    require './app/views/user/login.php';
  }

  public function logout(){
    unset($_SESSION['email']);
    header('location: /user/login');
  }
}