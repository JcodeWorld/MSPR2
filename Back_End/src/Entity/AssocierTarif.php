<?php

namespace App\Entity;

use App\Repository\AssocierTarifRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
#[ApiResource(
    normalizationContext: ['groups' => ['associertarif:read']],
    denormalizationContext: ['groups' => ['associertarif:write']]
)]

#[ORM\Entity(repositoryClass: AssocierTarifRepository::class)]
class AssocierTarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['associertarif:read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'associerTarifs')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['associertarif:read','associertarif:write'])]
    #[MaxDepth(1)]
    private ?Container $IdContainer = null;

    #[ORM\ManyToOne(inversedBy: 'associerTarifs')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['associertarif:read', 'associertarif:write'])]
    #[MaxDepth(1)]
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
