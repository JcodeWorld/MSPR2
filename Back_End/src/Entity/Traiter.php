<?php

namespace App\Entity;

use App\Repository\TraiterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TraiterRepository::class)]
class Traiter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'traiters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserAdmin $IdUserAdmin = null;

    #[ORM\ManyToOne(inversedBy: 'traiters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Message $IdMessage = null;

    #[ORM\ManyToOne(inversedBy: 'traiters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Action $IdAction = null;

    #[ORM\Column]
    private ?\DateTime $Date_Traiter = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdMessage(): ?Message
    {
        return $this->IdMessage;
    }

    public function setIdMessage(?Message $IdMessage): static
    {
        $this->IdMessage = $IdMessage;

        return $this;
    }

    public function getDateTraiter(): ?\DateTime
    {
        return $this->Date_Traiter;
    }

    public function setDateTraiter(\DateTime $Date_Traiter): static
    {
        $this->Date_Traiter = $Date_Traiter;

        return $this;
    }
}
