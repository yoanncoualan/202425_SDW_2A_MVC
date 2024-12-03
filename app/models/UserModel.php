<?php

class UserModel extends Bdd{
 
  public function __construct(){
    parent::__construct();
  }
 
  public function findAll(): array
  {
    $users = $this->co->prepare('SELECT * FROM User');
    $users->execute();
 
    return $users->fetchAll(PDO::FETCH_CLASS, 'User');
  }
 
  public function findOneById(int $id): User | false
  {
    $users = $this->co->prepare('SELECT * FROM User WHERE id = :id LIMIT 1');
    $users->setFetchMode(PDO::FETCH_CLASS, 'User');
    $users->execute([
      'id' => $id
    ]);
 
    return $users->fetch();
  }

  public function save($POST): int
  {
    $email = htmlspecialchars(trim($POST['email']));
    $pwd = htmlspecialchars(trim($POST['pwd']));

    $sql = 'INSERT INTO user(email, pwd) VALUES (:email, :pwd)';
    $params = [
      'email' => $email,
      'pwd' => password_hash(
        $pwd,
        PASSWORD_BCRYPT
      )
    ];

    $insert = $this->co->prepare($sql);
    $insert->execute($params);

    return $insert->rowCount();
  }
}