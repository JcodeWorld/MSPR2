<?php

namespace App\Entity;

use App\Repository\ContainerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContainerRepository::class)]
class Container
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Nom_Container = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Designation_Container = null;

    /**
     * @var Collection<int, Contenir>
     */
    #[ORM\OneToMany(targetEntity: Contenir::class, mappedBy: 'IdContainer')]
    private Collection $contenirs;

    #[ORM\ManyToOne(inversedBy: 'IdContainer')]
    #[ORM\JoinColumn(nullable: false)]
    private ?AssocierContenu $associerContenu = null;

    /**
     * @var Collection<int, AssocierTarif>
     */
    #[ORM\OneToMany(targetEntity: AssocierTarif::class, mappedBy: 'IdContainer')]
    private Collection $associerTarifs;

    public function __construct()
    {
        $this->contenirs = new ArrayCollection();
        $this->associerTarifs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomContainer(): ?string
    {
        return $this->Nom_Container;
    }

    public function setNomContainer(string $Nom_Container): static
    {
        $this->Nom_Container = $Nom_Container;

        return $this;
    }

    public function getDesignationContainer(): ?string
    {
        return $this->Designation_Container;
    }

    public function setDesignationContainer(string $Designation_Container): static
    {
        $this->Designation_Container = $Designation_Container;

        return $this;
    }

    /**
     * @return Collection<int, Contenir>
     */
    public function getContenirs(): Collection
    {
        return $this->contenirs;
    }

    public function addContenir(Contenir $contenir): static
    {
        if (!$this->contenirs->contains($contenir)) {
            $this->contenirs->add($contenir);
            $contenir->setIdContainer($this);
        }

        return $this;
    }

    public function removeContenir(Contenir $contenir): static
    {
        if ($this->contenirs->removeElement($contenir)) {
            // set the owning side to null (unless already changed)
            if ($contenir->getIdContainer() === $this) {
                $contenir->setIdContainer(null);
            }
        }

        return $this;
    }

    public function getAssocierContenu(): ?AssocierContenu
    {
        return $this->associerContenu;
    }

    public function setAssocierContenu(?AssocierContenu $associerContenu): static
    {
        $this->associerContenu = $associerContenu;

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
            $associerTarif->setIdContainer($this);
        }

        return $this;
    }

    public function removeAssocierTarif(AssocierTarif $associerTarif): static
    {
        if ($this->associerTarifs->removeElement($associerTarif)) {
            // set the owning side to null (unless already changed)
            if ($associerTarif->getIdContainer() === $this) {
                $associerTarif->setIdContainer(null);
            }
        }

        return $this;
    }
}
