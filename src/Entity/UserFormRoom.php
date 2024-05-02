<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFormRoom
 *
 * @ORM\Table(name="user_form_room", indexes={@ORM\Index(name="room_id", columns={"room_id"}), @ORM\Index(name="form_id", columns={"form_id", "room_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserFormRoom
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_f_r", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFR;

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
     * @ORM\Column(name="room_id", type="integer", nullable=false)
     */
    private $roomId;


}
