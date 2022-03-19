<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EtatRepository")
 */
class Salle
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
     * @var string
     *
     * @ORM\Column(name="nomsalle", type="string", length=50, nullable=false)
     */
    private $nomsalle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=80, nullable=true)
     */
    private $adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsalle(): ?string
    {
        return $this->nomsalle;
    }

    public function setNomsalle(string $nomsalle): self
    {
        $this->nomsalle = $nomsalle;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


}
