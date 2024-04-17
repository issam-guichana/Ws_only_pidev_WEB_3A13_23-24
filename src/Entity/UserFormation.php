<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Certificat;
use App\Entity\Formation;

/**
 * UserFormation
 *
 * @ORM\Table(name="user_formation", indexes={@ORM\Index(name="form_id", columns={"form_id"}), @ORM\Index(name="certif_id", columns={"certif_id"}), @ORM\Index(name="user_id", columns={"user_id", "form_id"}), @ORM\Index(name="IDX_40A0AC5BA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserFormation
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_u_f", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userUF;

    /**
     * @var App\Entity\Formation|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Formation", inversedBy="userFormations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="form_id", referencedColumnName="id_form")
     * })
     */
    private $formation;

    /**
     * @var App\Entity\Certificat|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Certificat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certif_id", referencedColumnName="id_certif")
     * })
     */
    private $certif;

    /**
     * @var App\Entity\User|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->userUF;
    }

    public function getFormation(): ?Formation
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;
        return $this;
    }

    public function getCertif(): ?Certificat
    {
        return $this->certif;
    }

    public function setCertif(?Certificat $certif): self
    {
        $this->certif = $certif;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getRole(): ?string
    {
        if ($this->user) {
            return $this->user->getRole();
        }
        return null;
    }
    public function setRole(string $role): self
    {

        if ($this->user) {

            $this->user->setRole($role);
        }
        return $this;
    }
}
