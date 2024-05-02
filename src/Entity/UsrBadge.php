<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="usr_badge", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_badge", columns={"id_badge"})})
 * @ORM\Entity
 */
class UsrBadge
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_u_b", type="integer")
     */
    private $idUB;

    /**
     * @ORM\ManyToOne(targetEntity="Badge", inversedBy="usrBadges")
     * @ORM\JoinColumn(name="id_badge", referencedColumnName="id_badge")
     */
    private $idBadge;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="usrBadges")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private $idUser;

    public function getIdUB(): ?int
    {
        return $this->idUB;
    }

    public function getIdBadge(): ?Badge
    {
        return $this->idBadge;
    }

    public function setIdBadge(?Badge $idBadge): static
    {
        $this->idBadge = $idBadge;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }
}
