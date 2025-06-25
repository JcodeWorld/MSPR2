<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenirRepository::class)]
class Contenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'contenirs')]
     #[ORM\JoinColumn(nullable: false)]
    private ?PageWeb $IdPageWeb = null;

    #[ORM\ManyToOne(inversedBy: 'contenirs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Container $IdContainer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPageWeb(): ?PageWeb
    {
        return $this->IdPageWeb;
    }

    public function setIdPageWeb(?PageWeb $IdPageWeb): static
    {
        $this->IdPageWeb = $IdPageWeb;

        return $this;
    }

    public function getIdContainer(): ?Container
    {
        return $this->IdContainer;
    }

    public function setIdContainer(?Container $IdContainer): static
    {
        $this->IdContainer = $IdContainer;

        return $this;
    }
}
