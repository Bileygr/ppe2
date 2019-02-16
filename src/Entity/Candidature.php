<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatureRepository")
 */
class Candidature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Offre", inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idoffre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $iduserjeune;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $iduserpartenaire;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdoffre(): ?Offre
    {
        return $this->idoffre;
    }

    public function setIdoffre(?Offre $idoffre): self
    {
        $this->idoffre = $idoffre;

        return $this;
    }

    public function getIduserjeune(): ?User
    {
        return $this->iduserjeune;
    }

    public function setIduserjeune(?User $iduserjeune): self
    {
        $this->iduserjeune = $iduserjeune;

        return $this;
    }

    public function getIduserpartenaire(): ?User
    {
        return $this->iduserpartenaire;
    }

    public function setIduserpartenaire(?User $iduserpartenaire): self
    {
        $this->iduserpartenaire = $iduserpartenaire;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
