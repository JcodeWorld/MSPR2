<?php

namespace App\Entity;

use App\Repository\ModifierTarifRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModifierTarifRepository::class)]
class ModifierTarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

        #[ORM\ManyToOne(inversedBy: 'modifierTarifs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tarif $IdTarif = null;

    #[ORM\ManyToOne(inversedBy: 'modifierTarifs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserAdmin $IdUserAdmin = null;
    #[ORM\Column]
    private ?\DateTime $Date_Modifier_Tarif = null;
    public function getId(): ?int
    {
        return $this->id;
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
     public function getIdUserAdmin(): ?UserAdmin
    {
        return $this->IdUserAdmin;
    }
    public function setIdUserAdmin(?UserAdmin $userAdmin): static
    {
        $this->IdUserAdmin = $userAdmin;
        return $this;
    }
    public function getDateModifierTarif(): ?\DateTime
    {
        return $this->Date_Modifier_Tarif;
    }

    public function setDateModifierTarif(\DateTime $Date_Modifier_Tarif): static
    {
        $this->Date_Modifier_Tarif = $Date_Modifier_Tarif;

        return $this;
    }
}
