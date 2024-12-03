<?php

abstract class Bdd{
  protected $co = null;
 
  protected function __construct() {
    if($this->co == null){
      $this->connect();
    }
  }
 
  private function connect():void
  {
    $this->co = new PDO(
      'mysql:host='. $_ENV['db_host'] .';dbname='. $_ENV['db_name'],
      $_ENV['db_user'],
      $_ENV['db_pwd']
    );
  }
}