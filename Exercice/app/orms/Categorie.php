<?php

class Categorie{
  private int $id;
  private string $title;
  private string $slug;

  public function getId(): int
  {
    return $this->id;
  }

  public function setTitle(string $title): self
  {
    $this->title = $title;
    return $this;
  }
  public function getTitle(): string
  {
    return $this->title;
  }

  public function setSlug(string $slug): self
  {
    $this->slug = $slug;
    return $this;
  }
  public function getSlug(): string
  {
    return $this->slug;
  }
}