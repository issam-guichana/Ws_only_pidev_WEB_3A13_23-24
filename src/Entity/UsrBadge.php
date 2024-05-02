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
     * @var int
     *
     * @ORM\Column(name="id_badge", type="integer", nullable=false)
     */
    private $idBadge;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;


}
