<?php

namespace App\Entity;

use App\Repository\StationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StationRepository::class)]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $latitude = null;

    #[ORM\Column]
    private ?int $longitude = null;

    #[ORM\Column(length: 255)]
    private ?string $adresserue = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseville = null;

    #[ORM\Column(length: 10)]
    private ?string $codepostal = null;

    #[ORM\OneToMany(mappedBy: 'idstation', targetEntity: Borne::class, orphanRemoval: true)]
    private Collection $idstation;

    public function __construct()
    {
        $this->idstation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?int
    {
        return $this->latitude;
    }

    public function setLatitude(int $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(int $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getAdresserue(): ?string
    {
        return $this->adresserue;
    }

    public function setAdresserue(string $adresserue): static
    {
        $this->adresserue = $adresserue;

        return $this;
    }

    public function getAdresseville(): ?string
    {
        return $this->adresseville;
    }

    public function setAdresseville(string $adresseville): static
    {
        $this->adresseville = $adresseville;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): static
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * @return Collection<int, Borne>
     */
    public function getIdstation(): Collection
    {
        return $this->idstation;
    }

    public function addIdstation(Borne $idstation): static
    {
        if (!$this->idstation->contains($idstation)) {
            $this->idstation->add($idstation);
            $idstation->setIdstation($this);
        }

        return $this;
    }

    public function removeIdstation(Borne $idstation): static
    {
        if ($this->idstation->removeElement($idstation)) {
            // set the owning side to null (unless already changed)
            if ($idstation->getIdstation() === $this) {
                $idstation->setIdstation(null);
            }
        }

        return $this;
    }
}
