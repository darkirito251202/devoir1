<?php

namespace App\Entity;

use App\Repository\OperationrechargementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OperationrechargementRepository::class)]
class Operationrechargement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateheuredebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateheurefin = null;

    #[ORM\Column]
    private ?int $nbkwheures = null;

    #[ORM\ManyToOne(inversedBy: 'idcontrat')]
    #[ORM\JoinColumn(nullable: false)]
    private ?contrat $idcontrat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateheuredebut(): ?\DateTimeInterface
    {
        return $this->dateheuredebut;
    }

    public function setDateheuredebut(\DateTimeInterface $dateheuredebut): static
    {
        $this->dateheuredebut = $dateheuredebut;

        return $this;
    }

    public function getDateheurefin(): ?\DateTimeInterface
    {
        return $this->dateheurefin;
    }

    public function setDateheurefin(\DateTimeInterface $dateheurefin): static
    {
        $this->dateheurefin = $dateheurefin;

        return $this;
    }

    public function getNbkwheures(): ?int
    {
        return $this->nbkwheures;
    }

    public function setNbkwheures(int $nbkwheures): static
    {
        $this->nbkwheures = $nbkwheures;

        return $this;
    }

    public function getIdcontrat(): ?contrat
    {
        return $this->idcontrat;
    }

    public function setIdcontrat(?contrat $idcontrat): static
    {
        $this->idcontrat = $idcontrat;

        return $this;
    }
}
