<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table(name="candidature", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FK_candidature_idoffre", columns={"idoffre"}), @ORM\Index(name="FK_candidature_idpartenaire", columns={"idpartenaire"}), @ORM\Index(name="FK_candidature_idjeune", columns={"idjeune"})})
 * @ORM\Entity
 */
class Candidature
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idoffre", type="integer", nullable=false)
     */
    private $idoffre;

    /**
     * @var int
     *
     * @ORM\Column(name="idjeune", type="integer", nullable=false)
     */
    private $idjeune;

    /**
     * @var int
     *
     * @ORM\Column(name="idpartenaire", type="integer", nullable=false)
     */
    private $idpartenaire;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="datetime", nullable=false)
     */
    private $dateajout;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
    }

    public function setIdoffre(int $idoffre): self
    {
        $this->idoffre = $idoffre;

        return $this;
    }

    public function getIdjeune(): ?int
    {
        return $this->idjeune;
    }

    public function setIdjeune(int $idjeune): self
    {
        $this->idjeune = $idjeune;

        return $this;
    }

    public function getIdpartenaire(): ?int
    {
        return $this->idpartenaire;
    }

    public function setIdpartenaire(int $idpartenaire): self
    {
        $this->idpartenaire = $idpartenaire;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(\DateTimeInterface $dateajout): self
    {
        $this->dateajout = $dateajout;

        return $this;
    }


}
