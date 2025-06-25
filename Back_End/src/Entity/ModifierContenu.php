<?php

namespace App\Entity;

use App\Repository\ModifierContenuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModifierContenuRepository::class)]
class ModifierContenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'modifierContenus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contenu $IdContenu = null;

    #[ORM\ManyToOne(inversedBy: 'modifierContenus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserAdmin $IdUserAdmin = null;

    #[ORM\Column]
    private ?\DateTime $Date_Modifier_Contenu = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdUserAdmin(): ?UserAdmin
    {
        return $this->IdUserAdmin;
    }

    public function setIdUserAdmin(?UserAdmin $IdUserAdmin): static
    {
        $this->IdUserAdmin = $IdUserAdmin;

        return $this;
    }

    public function getDateModifierContenu(): ?\DateTime
    {
        return $this->Date_Modifier_Contenu;
    }

    public function setDateModifierContenu(\DateTime $Date_Modifier_Contenu): static
    {
        $this->Date_Modifier_Contenu = $Date_Modifier_Contenu;

        return $this;
    }
}
