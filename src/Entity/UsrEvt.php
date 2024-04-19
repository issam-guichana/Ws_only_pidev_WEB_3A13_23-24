<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsrEvt
 *
 * @ORM\Table(name="usr_evt", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="event_id", columns={"event_id"})})
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
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="id_event")
     * })
     */
    private $event;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    public function getIdUE(): ?int
    {
        return $this->idUE;
    }

    public function getEvent(): ?Evenement
    {
        return $this->event;
    }

    public function setEvent(?Evenement $event): static
    {
        $this->event = $event;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }


}
