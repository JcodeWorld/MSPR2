<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Nom_Message = null;

    #[ORM\Column(length: 100)]
    private ?string $Prenom_Message = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Adresse_Message = null;

    #[ORM\Column(length: 150)]
    private ?string $Adresse_mail_Message = null;

    #[ORM\Column(length: 50)]
    private ?string $Telephone_Message = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Texte_Message = null;

    #[ORM\Column(length: 50)]
    private ?string $Statut_Message = null;

    /**
     * @var Collection<int, Traiter>
     */
    #[ORM\OneToMany(targetEntity: Traiter::class, mappedBy: 'IdMessage')]
    private Collection $traiters;

    public function __construct()
    {
        $this->traiters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMessage(): ?string
    {
        return $this->Nom_Message;
    }

    public function setNomMessage(string $Nom_Message): static
    {
        $this->Nom_Message = $Nom_Message;

        return $this;
    }

    public function getPrenomMessage(): ?string
    {
        return $this->Prenom_Message;
    }

    public function setPrenomMessage(string $Prenom_Message): static
    {
        $this->Prenom_Message = $Prenom_Message;

        return $this;
    }

    public function getAdresseMessage(): ?string
    {
        return $this->Adresse_Message;
    }

    public function setAdresseMessage(string $Adresse_Message): static
    {
        $this->Adresse_Message = $Adresse_Message;

        return $this;
    }

    public function getAdresseMailMessage(): ?string
    {
        return $this->Adresse_mail_Message;
    }

    public function setAdresseMailMessage(string $Adresse_mail_Message): static
    {
        $this->Adresse_mail_Message = $Adresse_mail_Message;

        return $this;
    }

    public function getTelephoneMessage(): ?string
    {
        return $this->Telephone_Message;
    }

    public function setTelephoneMessage(string $Telephone_Message): static
    {
        $this->Telephone_Message = $Telephone_Message;

        return $this;
    }

    public function getTexteMessage(): ?string
    {
        return $this->Texte_Message;
    }

    public function setTexteMessage(string $Texte_Message): static
    {
        $this->Texte_Message = $Texte_Message;

        return $this;
    }

    public function getStatutMessage(): ?string
    {
        return $this->Statut_Message;
    }

    public function setStatutMessage(string $Statut_Message): static
    {
        $this->Statut_Message = $Statut_Message;

        return $this;
    }

  public function getTraiters(): Collection
    {
        return $this->traiters;
    }

    public function addTraiter(Traiter $traiter): static
    {
        if (!$this->traiters->contains($traiter)) {
            $this->traiters[] = $traiter;
            $traiter->setMessage($this);
        }

        return $this;
    }

    public function removeTraiter(Traiter $traiter): static
    {
        if ($this->traiters->removeElement($traiter)) {
            if ($traiter->getMessage() === $this) {
                $traiter->setMessage(null);
            }
        }

        return $this;
    }
}
