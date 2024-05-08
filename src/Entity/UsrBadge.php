<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsrBadge
 *
 * @ORM\Table(name="usr_badge", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_badge", columns={"id_badge"})})
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \Badge
     *
     * @ORM\ManyToOne(targetEntity="Badge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_badge", referencedColumnName="id_badge")
     * })
     */
    private $idBadge;


}
