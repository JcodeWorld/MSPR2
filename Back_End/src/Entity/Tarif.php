<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
#[ApiResource(
    normalizationContext: ['groups' => ['tarif:read']],
    denormalizationContext: ['groups' => ['tarif:write']]
)]

#[ORM\Entity(repositoryClass: TarifRepository::class)]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['tarif:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['tarif:read', 'tarif:write'])]
    private ?string $Designation_Tarif = null;

    #[ORM\Column(length: 50)]
    #[Groups(['tarif:read', 'tarif:write'])]
    private ?string $Prix_Tarif = null;

    /**
     * @var Collection<int, AssocierTarif>
     */
    #[ORM\OneToMany(targetEntity: AssocierTarif::class, mappedBy: 'IdTarif')]
      #[Groups(['tarif:read'])]
    #[MaxDepth(1)]
    private Collection $associerTarifs;
   
    public function __construct()
    {
        $this->associerTarifs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignationTarif(): ?string
    {
        return $this->Designation_Tarif;
    }

    public function setDesignationTarif(string $Designation_Tarif): static
    {
        $this->Designation_Tarif = $Designation_Tarif;

        return $this;
    }

    public function getPrixTarif(): ?string
    {
        return $this->Prix_Tarif;
    }

    public function setPrixTarif(string $Prix_Tarif): static
    {
        $this->Prix_Tarif = $Prix_Tarif;

        return $this;
    }

    /**
     * @return Collection<int, AssocierTarif>
     */
    public function getAssocierTarifs(): Collection
    {
        return $this->associerTarifs;
    }

    public function addAssocierTarif(AssocierTarif $associerTarif): static
    {
        if (!$this->associerTarifs->contains($associerTarif)) {
            $this->associerTarifs->add($associerTarif);
            $associerTarif->setIdTarif($this);
        }

        return $this;
    }

    public function removeAssocierTarif(AssocierTarif $associerTarif): static
    {
        if ($this->associerTarifs->removeElement($associerTarif)) {
            // set the owning side to null (unless already changed)
            if ($associerTarif->getIdTarif() === $this) {
                $associerTarif->setIdTarif(null);
            }
        }

        return $this;
    }

}
