<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="room_id", columns={"room_id"})})
 * @ORM\Entity(repositoryClass=App\Repository\MessageRepository::class)
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
     * @ORM\ManyToOne(targetEntity=Room::class)
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id_room")
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

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
  

    public function getSenderMsg(): ?int
    {
        return $this->senderMsg;
    }

    public function setSenderMsg(?int $senderMsg): self
    {
        $this->senderMsg = $senderMsg;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }
}
