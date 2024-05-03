<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsrBadge
 *
 * @ORM\Table(name="usr_badge", indexes={@ORM\Index(name="id_badge", columns={"id_badge"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class UsrBadge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_u_b", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUB;

    /**
     * @var \Badge
     *
     * @ORM\ManyToOne(targetEntity="Badge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_badge", referencedColumnName="id_badge")
     * })
     */
    private $idBadge;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
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
