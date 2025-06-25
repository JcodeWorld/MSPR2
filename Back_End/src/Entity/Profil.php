<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilRepository::class)]
class Profil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Nom_Profil = null;

    #[ORM\Column(length: 100)]
    private ?string $Prenom_Profil = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Adresse_Profil = null;

    #[ORM\Column(length: 150)]
    private ?string $Adresse_mail_Profil = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProfil(): ?string
    {
        return $this->Nom_Profil;
    }

    public function setNomProfil(string $Nom_Profil): static
    {
        $this->Nom_Profil = $Nom_Profil;

        return $this;
    }

    public function getPrenomProfil(): ?string
    {
        return $this->Prenom_Profil;
    }

    public function setPrenomProfil(string $Prenom_Profil): static
    {
        $this->Prenom_Profil = $Prenom_Profil;

        return $this;
    }

    public function getAdresseProfil(): ?string
    {
        return $this->Adresse_Profil;
    }

    public function setAdresseProfil(string $Adresse_Profil): static
    {
        $this->Adresse_Profil = $Adresse_Profil;

        return $this;
    }

    public function getAdresseMailProfil(): ?string
    {
        return $this->Adresse_mail_Profil;
    }

    public function setAdresseMailProfil(string $Adresse_mail_Profil): static
    {
        $this->Adresse_mail_Profil = $Adresse_mail_Profil;

        return $this;
    }
}
