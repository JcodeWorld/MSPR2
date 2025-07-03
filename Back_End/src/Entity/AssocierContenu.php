<?php

namespace App\Entity;

use App\Repository\AssocierContenuRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;

#[ApiResource(
    normalizationContext: ['groups' => ['associercontenu:read']],
    denormalizationContext: ['groups' => ['associercontenu:write']]
)]
#[ORM\Entity(repositoryClass: AssocierContenuRepository::class)]
class AssocierContenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['associercontenu:read'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'associerContenus')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['associercontenu:read', 'associercontenu:write'])]
    #[MaxDepth(1)]
    private ?Container $IdContainer = null;

    #[ORM\ManyToOne(inversedBy: 'associerContenus')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['associercontenu:read', 'associercontenu:write'])]
    #[MaxDepth(1)]
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

