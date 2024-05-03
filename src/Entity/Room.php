<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
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

    public function getIdRoom(): ?int
    {
        return $this->idRoom;
    }

    public function getNomRoom(): ?string
    {
        return $this->nomRoom;
    }

    public function setNomRoom(string $nomRoom): static
    {
        $this->nomRoom = $nomRoom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDateCRoom(): ?\DateTimeInterface
    {
        return $this->dateCRoom;
    }

    public function setDateCRoom(\DateTimeInterface $dateCRoom): static
    {
        $this->dateCRoom = $dateCRoom;

        return $this;
    }

    public function getSuspendTime(): ?int
    {
        return $this->suspendTime;
    }

    public function setSuspendTime(?int $suspendTime): static
    {
        $this->suspendTime = $suspendTime;

        return $this;
    }


}
