<?php

namespace App\Entity;

use App\Repository\ActionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Type_Action = null;

        /**
     * @var Collection<int, Traiter>
     */
    #[ORM\OneToMany(targetEntity: Traiter::class, mappedBy: 'IdAction')]
    private Collection $traiters;

        public function __construct()
    {
        $this->traiters = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeAction(): ?string
    {
        return $this->Type_Action;
    }

    public function setTypeAction(string $Type_Action): static
    {
        $this->Type_Action = $Type_Action;

        return $this;
    }
}
