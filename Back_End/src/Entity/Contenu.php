<?php

namespace App\Entity;

use App\Repository\ContenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;

#[ApiResource(
    normalizationContext: ['groups' => ['contenu:read']],
    denormalizationContext: ['groups' => ['contenu:write']]
)]
#[ORM\Entity(repositoryClass: ContenuRepository::class)]
class Contenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['contenu:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['contenu:read', 'contenu:write'])]
    private ?string $Description_Contenu = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['contenu:read', 'contenu:write'])]
    private ?string $Adresse_image_Contenu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['contenu:read', 'contenu:write'])]
    private ?string $Contenu_texte_Contenu = null;

    #[ORM\OneToMany(targetEntity: AssocierContenu::class, mappedBy: 'IdContenu', orphanRemoval: true)]
    #[Groups(['contenu:read'])]
    #[MaxDepth(1)]
    private Collection $associerContenus;

    #[ORM\OneToMany(targetEntity: ModifierContenu::class, mappedBy: 'IdContenu', orphanRemoval: true)]
    #[Groups(['contenu:read'])]
    #[MaxDepth(1)]
    private Collection $modifierContenus;

    public function __construct()
    {
        $this->associerContenus = new ArrayCollection();
        $this->modifierContenus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionContenu(): ?string
    {
        return $this->Description_Contenu;
    }

    public function setDescriptionContenu(?string $Description_Contenu): static
    {
        $this->Description_Contenu = $Description_Contenu;
        return $this;
    }

    public function getAdresseImageContenu(): ?string
    {
        return $this->Adresse_image_Contenu;
    }

    public function setAdresseImageContenu(?string $Adresse_image_Contenu): static
    {
        $this->Adresse_image_Contenu = $Adresse_image_Contenu;
        return $this;
    }

    public function getContenuTexteContenu(): ?string
    {
        return $this->Contenu_texte_Contenu;
    }

    public function setContenuTexteContenu(?string $Contenu_texte_Contenu): static
    {
        $this->Contenu_texte_Contenu = $Contenu_texte_Contenu;
        return $this;
    }

    /**
     * @return Collection<int, AssocierContenu>
     */
    public function getAssocierContenus(): Collection
    {
        return $this->associerContenus;
    }

    public function addAssocierContenu(AssocierContenu $associerContenu): static
    {
        if (!$this->associerContenus->contains($associerContenu)) {
            $this->associerContenus->add($associerContenu);
            $associerContenu->setIdContenu($this);
        }

        return $this;
    }

    public function removeAssocierContenu(AssocierContenu $associerContenu): static
    {
        if ($this->associerContenus->removeElement($associerContenu)) {
            if ($associerContenu->getIdContenu() === $this) {
                $associerContenu->setIdContenu(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModifierContenu>
     */
    public function getModifierContenus(): Collection
    {
        return $this->modifierContenus;
    }

    public function addModifierContenu(ModifierContenu $modifierContenu): static
    {
        if (!$this->modifierContenus->contains($modifierContenu)) {
            $this->modifierContenus->add($modifierContenu);
            $modifierContenu->setIdContenu($this);
        }

        return $this;
    }

    public function removeModifierContenu(ModifierContenu $modifierContenu): static
    {
        if ($this->modifierContenus->removeElement($modifierContenu)) {
            if ($modifierContenu->getIdContenu() === $this) {
                $modifierContenu->setIdContenu(null);
            }
        }

        return $this;
    }
}
