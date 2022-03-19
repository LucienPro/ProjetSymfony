<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessionintervenant
 *
 * @ORM\Table(name="sessionintervenant", indexes={@ORM\Index(name="IDX_8F890A2BAB9A1716", columns={"intervenant_id"}), @ORM\Index(name="IDX_8F890A2B613FECDF", columns={"session_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\EtatRepository")
 */
class Sessionintervenant
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
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;

    /**
     * @var \Intervenant
     *
     * @ORM\ManyToOne(targetEntity="Intervenant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intervenant_id", referencedColumnName="id")
     * })
     */
    private $intervenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSession()
    {
        return $this->session;
    }

    public function setSession(?Session $session): self
    {
        $this->session = $session;

        return $this;
    }

    public function getIntervenant()
    {
        return $this->intervenant;
    }

    public function setIntervenant(?Intervenant $intervenant): self
    {
        $this->intervenant = $intervenant;

        return $this;
    }


}
