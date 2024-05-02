<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;
use App\Entity\Message;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass=App\Repository\RoomRepository::class)
 *  @UniqueEntity(fields={"nomRoom"}, message="Le nom de la room doit être unique.")
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
     * @Assert\NotBlank(message="Nom Room est obligatoire")
     *
     * @ORM\Column(name="nom_room", type="string", length=255, nullable=false)
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nomRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Description est obligatoire")
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
     * @ORM\Column(name="date_c_room", type="datetime", nullable=true,options={"default": "CURRENT_TIMESTAMP"}))
     */
   private $dateCRoom;
     /**
     * @ORM\PrePersist
     */
    public function prePersist(): void
    {
        if ($this->dateCRoom === null) {
            $this->dateCRoom = new \DateTime();
        }
    }
    
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

    //public function getDateCRoom(): ?DateTimeInterface
//{
  //    $this->dateCRoom = new DateTime();
    //}

    public function setDateCRoom( DateTimeInterface $dateCRoom): static
    {
        $this->dateCRoom = $dateCRoom;

        return $this;
    }
    public function getDateCRoom(): ?DateTimeInterface
{
    return $this->dateCRoom;
}

/*public function setDateCRoom(?DateTimeInterface $dateCRoom): self
{
    $this->dateCRoom = $dateCRoom;

    return $this;
}
/**
     * Set the current date and time before persisting the entity.
     *
     * @ORM\PrePersist
     */
    public function setDateCRoomValue(): void
    {
        $this->dateCRoom = new \DateTime();
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Message", mappedBy="room")
     */
    private $messages;

    // Constructor and other methods...

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

   

}
