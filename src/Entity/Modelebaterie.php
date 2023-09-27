<?php

namespace App\Entity;

use App\Repository\ModelebaterieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModelebaterieRepository::class)]
class Modelebaterie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $fabricant = null;

    #[ORM\OneToMany(mappedBy: 'idmodelebatterie', targetEntity: Contrat::class, orphanRemoval: true)]
    private Collection $idmodelebatterie;

    public function __construct()
    {
        $this->idmodelebatterie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCapacite(): ?string
    {
        return $this->capacite;
    }

    public function setCapacite(string $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getFabricant(): ?string
    {
        return $this->fabricant;
    }

    public function setFabricant(string $fabricant): static
    {
        $this->fabricant = $fabricant;

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getIdmodelebatterie(): Collection
    {
        return $this->idmodelebatterie;
    }

    public function addIdmodelebatterie(Contrat $idmodelebatterie): static
    {
        if (!$this->idmodelebatterie->contains($idmodelebatterie)) {
            $this->idmodelebatterie->add($idmodelebatterie);
            $idmodelebatterie->setIdmodelebatterie($this);
        }

        return $this;
    }

    public function removeIdmodelebatterie(Contrat $idmodelebatterie): static
    {
        if ($this->idmodelebatterie->removeElement($idmodelebatterie)) {
            // set the owning side to null (unless already changed)
            if ($idmodelebatterie->getIdmodelebatterie() === $this) {
                $idmodelebatterie->setIdmodelebatterie(null);
            }
        }

        return $this;
    }
}
