<?php

namespace App\Entity;

use App\Repository\UserAdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserAdminRepository::class)]
class UserAdmin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $User_User_admin = null;

    #[ORM\Column(length: 255)]
    private ?string $Password_User_admin = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Profil $Profil_id_profil = null;

    /**
     * @var Collection<int, Traiter>
     */
    #[ORM\OneToMany(targetEntity: Traiter::class, mappedBy: 'IdUserAdmin')]
    private Collection $traiters;

    /**
     * @var Collection<int, ModifierContenu>
     */
    #[ORM\OneToMany(targetEntity: ModifierContenu::class, mappedBy: 'IdUserAdmin')]
    private Collection $modifierContenus;

    /**
     * @var Collection<int, ModifierTarif>
     */
    #[ORM\OneToMany(mappedBy: 'IdUserAdmin', targetEntity: ModifierTarif::class)]
private Collection $modifierTarifs;

public function __construct()
{
    $this->modifierTarifs = new ArrayCollection();
    $this->traiters = new ArrayCollection();
    $this->modifierContenus = new ArrayCollection();
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserUserAdmin(): ?string
    {
        return $this->User_User_admin;
    }

    public function setUserUserAdmin(string $User_User_admin): static
    {
        $this->User_User_admin = $User_User_admin;

        return $this;
    }

    public function getPasswordUserAdmin(): ?string
    {
        return $this->Password_User_admin;
    }

    public function setPasswordUserAdmin(string $Password_User_admin): static
    {
        $this->Password_User_admin = $Password_User_admin;

        return $this;
    }

    public function getProfilIdProfil(): ?Profil
    {
        return $this->Profil_id_profil;
    }

    public function setProfilIdProfil(Profil $Profil_id_profil): static
    {
        $this->Profil_id_profil = $Profil_id_profil;

        return $this;
    }

    /**
     * @return Collection<int, Traiter>
     */
    public function getTraiters(): Collection
    {
        return $this->traiters;
    }

    public function addTraiter(Traiter $traiter): static
    {
        if (!$this->traiters->contains($traiter)) {
            $this->traiters->add($traiter);
            $traiter->setIdUserAdmin($this);
        }

        return $this;
    }

    public function removeTraiter(Traiter $traiter): static
    {
        if ($this->traiters->removeElement($traiter)) {
            // set the owning side to null (unless already changed)
            if ($traiter->getIdUserAdmin() === $this) {
                $traiter->setIdUserAdmin(null);
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
            $modifierContenu->setIdUserAdmin($this);
        }

        return $this;
    }

    public function removeModifierContenu(ModifierContenu $modifierContenu): static
    {
        if ($this->modifierContenus->removeElement($modifierContenu)) {
            // set the owning side to null (unless already changed)
            if ($modifierContenu->getIdUserAdmin() === $this) {
                $modifierContenu->setIdUserAdmin(null);
            }
        }

        return $this;
    }
    public function getModifierTarifs(): Collection
{
    return $this->modifierTarifs;
}

public function addModifierTarif(ModifierTarif $modifierTarif): static
{
    if (!$this->modifierTarifs->contains($modifierTarif)) {
        $this->modifierTarifs[] = $modifierTarif;
        $modifierTarif->setIdUserAdmin($this);
    }

    return $this;
}

public function removeModifierTarif(ModifierTarif $modifierTarif): static
{
    if ($this->modifierTarifs->removeElement($modifierTarif)) {
        if ($modifierTarif->getIdUserAdmin() === $this) {
            $modifierTarif->setIdUserAdmin(null);
        }
    }

    return $this;
}
}
