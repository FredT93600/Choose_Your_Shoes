<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Image = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Reference = null;

    #[ORM\Column]
    private ?int $Taille = null;

    #[ORM\Column]
    private ?int $Quantite = null;

    #[ORM\Column(length: 255)]
    private ?string $Categorie = null;

    #[ORM\Column]
    private ?int $Stock = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getReference(): ?int
    {
        return $this->Reference;
    }

    public function setReference(int $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->Taille;
    }

    public function setTaille(int $Taille): static
    {
        $this->Taille = $Taille;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): static
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(int $Stock): static
    {
        $this->Stock = $Stock;

        return $this;
    }
}
