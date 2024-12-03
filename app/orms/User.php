<?php

class User{
  private int $id;
  private string $email;
  private string $pwd;
 
  public function getId(): int
  {
    return $this->id;
  }
 
  public function setEmail(string $email): self
  {
    $this->email = $email;
    return $this;
  }
  public function getEmail(): string
  {
    return $this->email;
  }
 
  public function setPwd(string $pwd): self
  {
    $this->pwd = $pwd;
    return $this;
  }
  public function getPwd(): string
  {
    return $this->pwd;
  }
}