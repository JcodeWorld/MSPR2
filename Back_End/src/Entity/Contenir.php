<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Symfony\Component\Serializer\Attribute\MaxDepth;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ContenirRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['contenir:read']],
    denormalizationContext: ['groups' => ['contenir:write']]
)]class Contenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['contenir:read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'contenirs')]
    #[ORM\JoinColumn(nullable: false)]
    #[MaxDepth(1)]
    #[Groups(['contenir:read'])]
    private ?PageWeb $IdPageWeb = null;

    #[ORM\ManyToOne(inversedBy: 'contenirs')]
    #[ORM\JoinColumn(nullable: false)]
    #[MaxDepth(1)]
    #[Groups(['contenir:read'])]
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
