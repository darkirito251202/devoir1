<?php

namespace App\Entity;

use App\Repository\BorneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BorneRepository::class)]
class Borne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateMiseenservice = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datederniererevision = null;

    #[ORM\ManyToOne(inversedBy: 'codetypecharge')]
    #[ORM\JoinColumn(nullable: false)]
    private ?typecharge $codetypecharge = null;

    #[ORM\ManyToOne(inversedBy: 'idstation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?station $idstation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateMiseenservice(): ?\DateTimeInterface
    {
        return $this->dateMiseenservice;
    }

    public function setDateMiseenservice(\DateTimeInterface $dateMiseenservice): static
    {
        $this->dateMiseenservice = $dateMiseenservice;

        return $this;
    }

    public function getDatederniererevision(): ?\DateTimeInterface
    {
        return $this->datederniererevision;
    }

    public function setDatederniererevision(\DateTimeInterface $datederniererevision): static
    {
        $this->datederniererevision = $datederniererevision;

        return $this;
    }

    public function getCodetypecharge(): ?typecharge
    {
        return $this->codetypecharge;
    }

    public function setCodetypecharge(?typecharge $codetypecharge): static
    {
        $this->codetypecharge = $codetypecharge;

        return $this;
    }

    public function getIdstation(): ?station
    {
        return $this->idstation;
    }

    public function setIdstation(?station $idstation): static
    {
        $this->idstation = $idstation;

        return $this;
    }
}
