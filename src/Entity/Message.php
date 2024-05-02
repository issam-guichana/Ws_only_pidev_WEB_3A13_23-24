<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="room_id", columns={"room_id"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_msg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="string", length=2500, nullable=true)
     */
    private $contenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=300, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_msg", type="time", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $heureMsg = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_msg", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateMsg = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sender_msg", type="integer", nullable=true)
     */
    private $senderMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="Active"})
     */
    private $status = 'Active';

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="id_room")
     * })
     */
    private $room;

    public function getIdMsg(): ?int
    {
        return $this->idMsg;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getHeureMsg(): ?\DateTimeInterface
    {
        return $this->heureMsg;
    }

    public function setHeureMsg(\DateTimeInterface $heureMsg): static
    {
        $this->heureMsg = $heureMsg;

        return $this;
    }

    public function getDateMsg(): ?\DateTimeInterface
    {
        return $this->dateMsg;
    }

    public function setDateMsg(\DateTimeInterface $dateMsg): static
    {
        $this->dateMsg = $dateMsg;

        return $this;
    }

    public function getSenderMsg(): ?int
    {
        return $this->senderMsg;
    }

    public function setSenderMsg(?int $senderMsg): static
    {
        $this->senderMsg = $senderMsg;

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

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): static
    {
        $this->room = $room;

        return $this;
    }


}
