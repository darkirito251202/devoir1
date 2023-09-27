<?php

namespace App\Entity;

use App\Repository\TypechargeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypechargeRepository::class)]
class Typecharge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelletypecharge = null;

    #[ORM\Column(length: 255)]
    private ?string $puissancetypecharge = null;

    #[ORM\OneToMany(mappedBy: 'codetypecharge', targetEntity: Borne::class, orphanRemoval: true)]
    private Collection $codetypecharge;

    public function __construct()
    {
        $this->codetypecharge = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelletypecharge(): ?string
    {
        return $this->libelletypecharge;
    }

    public function setLibelletypecharge(string $libelletypecharge): static
    {
        $this->libelletypecharge = $libelletypecharge;

        return $this;
    }

    public function getPuissancetypecharge(): ?string
    {
        return $this->puissancetypecharge;
    }

    public function setPuissancetypecharge(string $puissancetypecharge): static
    {
        $this->puissancetypecharge = $puissancetypecharge;

        return $this;
    }

    /**
     * @return Collection<int, Borne>
     */
    public function getCodetypecharge(): Collection
    {
        return $this->codetypecharge;
    }

    public function addCodetypecharge(Borne $codetypecharge): static
    {
        if (!$this->codetypecharge->contains($codetypecharge)) {
            $this->codetypecharge->add($codetypecharge);
            $codetypecharge->setCodetypecharge($this);
        }

        return $this;
    }

    public function removeCodetypecharge(Borne $codetypecharge): static
    {
        if ($this->codetypecharge->removeElement($codetypecharge)) {
            // set the owning side to null (unless already changed)
            if ($codetypecharge->getCodetypecharge() === $this) {
                $codetypecharge->setCodetypecharge(null);
            }
        }

        return $this;
    }
}
