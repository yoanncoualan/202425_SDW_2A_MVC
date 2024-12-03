<?php

class Produit{
  private int $id;
  private string $title;
  private string $slug;
  private ?string $content;
  private Categorie $categorie;

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

  public function setContent(?string $content): self
  {
    $this->content = $content;
    return $this;
  }
  public function getContent(): ?string
  {
    return $this->content;
  }

  public function setCategorie(Categorie $categorie): self
  {
    $this->categorie = $categorie;
    return $this;
  }
  public function getCategorie(): Categorie
  {
    return $this->categorie;
  }
}