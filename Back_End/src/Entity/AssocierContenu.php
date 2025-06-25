<?php

namespace App\Entity;

use App\Repository\AssocierContenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssocierContenuRepository::class)]
class AssocierContenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Container>
     */
    #[ORM\OneToMany(targetEntity: Container::class, mappedBy: 'associerContenu')]
    private Collection $IdContainer;

    #[ORM\ManyToOne(inversedBy: 'associerContenus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contenu $IdContenu = null;

    public function __construct()
    {
        $this->IdContainer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Container>
     */
    public function getIdContainer(): Collection
    {
        return $this->IdContainer;
    }

    public function addIdContainer(Container $idContainer): static
    {
        if (!$this->IdContainer->contains($idContainer)) {
            $this->IdContainer->add($idContainer);
            $idContainer->setAssocierContenu($this);
        }

        return $this;
    }

    public function removeIdContainer(Container $idContainer): static
    {
        if ($this->IdContainer->removeElement($idContainer)) {
            // set the owning side to null (unless already changed)
            if ($idContainer->getAssocierContenu() === $this) {
                $idContainer->setAssocierContenu(null);
            }
        }

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
