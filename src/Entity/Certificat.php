<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Certificat
 *
 * @ORM\Table(name="certificat")
 * @ORM\Entity
 */
class Certificat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_certif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCertif;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_certif", type="string", length=255, nullable=false)
     */
    private $nomCertif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_certif", type="date", nullable=false)
     */
    private $dateCertif;

    public function getIdCertif(): ?int
    {
        return $this->idCertif;
    }

    public function getNomCertif(): ?string
    {
        return $this->nomCertif;
    }

    public function setNomCertif(string $nomCertif): static
    {
        $this->nomCertif = $nomCertif;

        return $this;
    }

    public function getDateCertif(): ?\DateTimeInterface
    {
        return $this->dateCertif;
    }

    public function setDateCertif(\DateTimeInterface $dateCertif): static
    {
        $this->dateCertif = $dateCertif;

        return $this;
    }


}
