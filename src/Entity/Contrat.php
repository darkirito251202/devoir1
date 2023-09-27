<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datecontrat = null;

    #[ORM\Column(length: 20)]
    private ?string $noimmatriculation = null;

    #[ORM\ManyToOne(inversedBy: 'idusager')]
    #[ORM\JoinColumn(nullable: false)]
    private ?usager $idusager = null;

    #[ORM\ManyToOne(inversedBy: 'idmodelebatterie')]
    #[ORM\JoinColumn(nullable: false)]
    private ?modelebaterie $idmodelebatterie = null;

    #[ORM\OneToMany(mappedBy: 'idcontrat', targetEntity: Operationrechargement::class, orphanRemoval: true)]
    private Collection $idcontrat;

    public function __construct()
    {
        $this->idcontrat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatecontrat(): ?\DateTimeInterface
    {
        return $this->datecontrat;
    }

    public function setDatecontrat(\DateTimeInterface $datecontrat): static
    {
        $this->datecontrat = $datecontrat;

        return $this;
    }

    public function getNoimmatriculation(): ?string
    {
        return $this->noimmatriculation;
    }

    public function setNoimmatriculation(string $noimmatriculation): static
    {
        $this->noimmatriculation = $noimmatriculation;

        return $this;
    }

    public function getIdusager(): ?usager
    {
        return $this->idusager;
    }

    public function setIdusager(?usager $idusager): static
    {
        $this->idusager = $idusager;

        return $this;
    }

    public function getIdmodelebatterie(): ?modelebaterie
    {
        return $this->idmodelebatterie;
    }

    public function setIdmodelebatterie(?modelebaterie $idmodelebatterie): static
    {
        $this->idmodelebatterie = $idmodelebatterie;

        return $this;
    }

    /**
     * @return Collection<int, Operationrechargement>
     */
    public function getIdcontrat(): Collection
    {
        return $this->idcontrat;
    }

    public function addIdcontrat(Operationrechargement $idcontrat): static
    {
        if (!$this->idcontrat->contains($idcontrat)) {
            $this->idcontrat->add($idcontrat);
            $idcontrat->setIdcontrat($this);
        }

        return $this;
    }

    public function removeIdcontrat(Operationrechargement $idcontrat): static
    {
        if ($this->idcontrat->removeElement($idcontrat)) {
            // set the owning side to null (unless already changed)
            if ($idcontrat->getIdcontrat() === $this) {
                $idcontrat->setIdcontrat(null);
            }
        }

        return $this;
    }
}
