<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity
 */
class Room
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_room", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_room", type="string", length=255, nullable=false)
     */
    private $nomRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="Active"})
     */
    private $status = 'Active';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_c_room", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCRoom = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="suspend_time", type="integer", nullable=true)
     */
    private $suspendTime;


}
