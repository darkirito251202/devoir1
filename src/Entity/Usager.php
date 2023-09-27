<?php

namespace App\Entity;

use App\Repository\UsagerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsagerRepository::class)]
class Usager
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 10)]
    private ?string $codePostal = null;

    #[ORM\Column(length: 20)]
    private ?string $telfixe = null;

    #[ORM\Column(length: 20)]
    private ?string $telmobile = null;

    #[ORM\Column(length: 255)]
    private ?string $mel = null;

    #[ORM\OneToMany(mappedBy: 'idusager', targetEntity: Contrat::class, orphanRemoval: true)]
    private Collection $idusager;

  
    public function __construct()
    {
        $this->contrats = new ArrayCollection();
        $this->idusager = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(string $telfixe): static
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getTelmobile(): ?string
    {
        return $this->telmobile;
    }

    public function setTelmobile(string $telmobile): static
    {
        $this->telmobile = $telmobile;

        return $this;
    }

    public function getMel(): ?string
    {
        return $this->mel;
    }

    public function setMel(string $mel): static
    {
        $this->mel = $mel;

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getIdusager(): Collection
    {
        return $this->idusager;
    }

    public function addIdusager(Contrat $idusager): static
    {
        if (!$this->idusager->contains($idusager)) {
            $this->idusager->add($idusager);
            $idusager->setIdusager($this);
        }

        return $this;
    }

    public function removeIdusager(Contrat $idusager): static
    {
        if ($this->idusager->removeElement($idusager)) {
            // set the owning side to null (unless already changed)
            if ($idusager->getIdusager() === $this) {
                $idusager->setIdusager(null);
            }
        }

        return $this;
    }

   
}
