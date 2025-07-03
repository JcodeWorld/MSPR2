<?php

namespace App\Entity;

use App\Repository\PageWebRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: PageWebRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['pageweb:read']],
    denormalizationContext: ['groups' => ['pageweb:write']]
)]
class PageWeb
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['pageweb:read', 'contenir:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['pageweb:read', 'pageweb:write', 'contenir:read'])]
    private ?string $Adresse_Url = null;

    /**
     * @var Collection<int, Contenir>
     */
    #[ORM\OneToMany(mappedBy: 'IdPageWeb', targetEntity: Contenir::class)]
    #[Groups(['pageweb:read'])] // ⚠️ pas dans 'contenir:read' pour éviter boucle
    #[MaxDepth(1)]
    private Collection $contenirs;

    public function __construct()
    {
        $this->contenirs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseUrl(): ?string
    {
        return $this->Adresse_Url;
    }

    public function setAdresseUrl(string $Adresse_Url): static
    {
        $this->Adresse_Url = $Adresse_Url;

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
            $contenir->setIdPageWeb($this);
        }

        return $this;
    }

    public function removeContenir(Contenir $contenir): static
    {
        if ($this->contenirs->removeElement($contenir)) {
            if ($contenir->getIdPageWeb() === $this) {
                $contenir->setIdPageWeb(null);
            }
        }

        return $this;
    }
}

