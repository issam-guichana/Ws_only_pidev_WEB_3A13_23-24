<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Formation;
use App\Entity\User;
use App\Entity\Room;

/**
 * UserFormRoom
 *
 * @ORM\Table(name="user_form_room", indexes={@ORM\Index(name="room_id", columns={"room_id"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="form_id", columns={"form_id", "room_id"}), @ORM\Index(name="IDX_E65ED8685FF69B7D", columns={"form_id"})})
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
     * @var \Room|null
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="id_room")
     * })
     */
    private $room;

    /**
     * @var App\Entity\User|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    /**
     * @var App\Entity\Formation|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Formation", inversedBy="userFormations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="form_id", referencedColumnName="id_form")
     * })
     */
    private $form;

    public function getIdFR(): ?int
    {
        return $this->idFR;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getForm(): ?Formation
    {
        return $this->form;
    }

    public function setForm(?Formation $form): self
    {
        $this->form = $form;

        return $this;
    }

    public function getRole(): ?string
    {
        if ($this->user) {
            return $this->user->getRole();
        }
        return null;
    }

    public function setRole(string $role): self
    {
        if ($this->user) {
            $this->user->setRole($role);
        }
        return $this;
    }
    
}
