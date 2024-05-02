<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsrEvt
 *
 * @ORM\Table(name="usr_evt")
 * @ORM\Entity
 */
class UsrEvt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_u_e", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUE;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     */
    private $eventId;


}
