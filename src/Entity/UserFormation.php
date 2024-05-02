<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFormation
 *
 * @ORM\Table(name="user_formation", indexes={@ORM\Index(name="form_id", columns={"form_id"}), @ORM\Index(name="user_id", columns={"user_id", "form_id"}), @ORM\Index(name="certif_id", columns={"certif_id"})})
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="form_id", type="integer", nullable=false)
     */
    private $formId;

    /**
     * @var int
     *
     * @ORM\Column(name="certif_id", type="integer", nullable=false)
     */
    private $certifId;


}
