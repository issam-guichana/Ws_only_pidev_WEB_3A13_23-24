<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFormRoom
 *
 * @ORM\Table(name="user_form_room", indexes={@ORM\Index(name="form_id", columns={"form_id", "room_id"}), @ORM\Index(name="room_id", columns={"room_id"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="IDX_E65ED8685FF69B7D", columns={"form_id"})})
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
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="form_id", referencedColumnName="id_form")
     * })
     */
    private $form;

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="id_room")
     * })
     */
    private $room;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;


}
