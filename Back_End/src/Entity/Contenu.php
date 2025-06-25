<?php

namespace App\Entity;

use App\Repository\ContenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenuRepository::class)]
class Contenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description_Contenu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Adresse_image_Contenu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Contenu_texte_Contenu = null;

    /**
     * @var Collection<int, AssocierContenu>
     */
    #[ORM\OneToMany(targetEntity: AssocierContenu::class, mappedBy: 'IdContenu')]
    private Collection $associerContenus;

    /**
     * @var Collection<int, ModifierContenu>
     */
    #[ORM\OneToMany(targetEntity: ModifierContenu::class, mappedBy: 'IdContenu')]
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

    public function setAdresseImageContenu(string $Adresse_image_Contenu): static
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
            // set the owning side to null (unless already changed)
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
            // set the owning side to null (unless already changed)
            if ($modifierContenu->getIdContenu() === $this) {
                $modifierContenu->setIdContenu(null);
            }
        }

        return $this;
    }
}
