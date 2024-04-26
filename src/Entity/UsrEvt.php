<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="usr_evt")
 * @ORM\Entity
 */
class UsrEvt
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id_u_e", type="integer")
     */
    private $idUE;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evenement")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id_event")
     */
    private $event;

    public function getIdUE(): ?int
    {
        return $this->idUE;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getEvent(): ?Evenement
    {
        return $this->event;
    }

    public function setEvent(?Evenement $event): self
    {
        $this->event = $event;
        return $this;
    }
}
