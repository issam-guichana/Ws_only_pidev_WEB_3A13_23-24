<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id_certif", type="integer", nullable=false)
     */
    private $idCertif;

    /**
     * @ORM\Column(name="nom_certif", type="string", length=255, nullable=false)
     */
    private $nomCertif;

    /**
     * @ORM\Column(name="date_certif", type="date", nullable=false)
     */
    private $dateCertif;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserFormation", mappedBy="certificat")
     */
    private $userFormations;

    public function __construct()
    {
        $this->userFormations = new ArrayCollection();
    }

    public function getIdCertif(): ?int
    {
        return $this->idCertif;
    }

    public function setIdCertif(int $idCertif): self
    {
        $this->idCertif = $idCertif;

        return $this;
    }

    public function getNomCertif(): ?string
    {
        return $this->nomCertif;
    }

    public function setNomCertif(string $nomCertif): self
    {
        $this->nomCertif = $nomCertif;

        return $this;
    }

    public function getDateCertif(): ?\DateTimeInterface
    {
        return $this->dateCertif;
    }

    public function setDateCertif(\DateTimeInterface $dateCertif): self
    {
        $this->dateCertif = $dateCertif;

        return $this;
    }

    /**
     * @return Collection|UserFormation[]
     */
    public function getUserFormations(): Collection
    {
        return $this->userFormations;
    }

    public function addUserFormation(UserFormation $userFormation): self
    {
        if (!$this->userFormations->contains($userFormation)) {
            $this->userFormations[] = $userFormation;
            $userFormation->setCertificat($this);
        }

        return $this;
    }

    public function removeUserFormation(UserFormation $userFormation): self
    {
        if ($this->userFormations->removeElement($userFormation)) {
            // set the owning side to null (unless already changed)
            if ($userFormation->getCertificat() === $this) {
                $userFormation->setCertificat(null);
            }
        }

        return $this;
    }
}
