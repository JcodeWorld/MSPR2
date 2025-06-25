<?php

namespace App\Entity;

use App\Repository\AssocierTarifRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssocierTarifRepository::class)]
class AssocierTarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'associerTarifs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Container $IdContainer = null;

    #[ORM\ManyToOne(inversedBy: 'associerTarifs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tarif $IdTarif = null;

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

    public function getIdTarif(): ?Tarif
    {
        return $this->IdTarif;
    }

    public function setIdTarif(?Tarif $IdTarif): static
    {
        $this->IdTarif = $IdTarif;

        return $this;
    }
}
