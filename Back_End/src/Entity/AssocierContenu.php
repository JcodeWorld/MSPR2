<?php

namespace App\Entity;

use App\Repository\AssocierContenuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssocierContenuRepository::class)]
class AssocierContenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'associerContenus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Container $IdContainer = null;

    #[ORM\ManyToOne(inversedBy: 'associerContenus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contenu $IdContenu = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdContenu(): ?Contenu
    {
        return $this->IdContenu;
    }

    public function setIdContenu(?Contenu $IdContenu): static
    {
        $this->IdContenu = $IdContenu;
        return $this;
    }
}
