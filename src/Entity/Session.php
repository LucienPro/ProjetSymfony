<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session", indexes={@ORM\Index(name="IDX_D044D5D4E8C859A6", columns={"idformation"}), @ORM\Index(name="IDX_D044D5D48CEBACA0", columns={"idsalle"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EtatRepository")
 */
class Session
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSession", type="datetime", nullable=false)
     */
    private $datesession;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire", type="string", length=50, nullable=false)
     */
    private $horaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLimiteInscription", type="datetime", nullable=false)
     */
    private $datelimiteinscription;

    /**
     * @var int
     *
     * @ORM\Column(name="nbinscrit", type="integer", nullable=false)
     */
    private $nbinscrit;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsalle", referencedColumnName="id")
     * })
     */
    private $idsalle;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idformation", referencedColumnName="id")
     * })
     */
    private $idformation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatesession(): ?\DateTimeInterface
    {
        return $this->datesession;
    }

    public function setDatesession(\DateTimeInterface $datesession): self
    {
        $this->datesession = $datesession;

        return $this;
    }

    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    public function setHoraire(string $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getDatelimiteinscription(): ?\DateTimeInterface
    {
        return $this->datelimiteinscription;
    }

    public function setDatelimiteinscription(\DateTimeInterface $datelimiteinscription): self
    {
        $this->datelimiteinscription = $datelimiteinscription;

        return $this;
    }

    public function getNbinscrit(): ?int
    {
        return $this->nbinscrit;
    }

    public function setNbinscrit(int $nbinscrit): self
    {
        $this->nbinscrit = $nbinscrit;

        return $this;
    }

    public function getIdsalle()
    {
        return $this->idsalle;
    }

    public function setIdsalle(?Salle $idsalle): self
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    public function getIdformation()
    {
        return $this->idformation;
    }

    public function setIdformation(?Formation $idformation): self
    {
        $this->idformation = $idformation;

        return $this;
    }


}
