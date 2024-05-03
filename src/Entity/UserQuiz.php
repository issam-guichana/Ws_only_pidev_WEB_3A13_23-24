<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQuiz
 *
 * @ORM\Table(name="user_quiz", indexes={@ORM\Index(name="user_id", columns={"user_id", "quiz_id"}), @ORM\Index(name="quiz_id", columns={"quiz_id"}), @ORM\Index(name="IDX_DE93B65BA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserQuiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_u_q", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUQ;

    /**
     * @var int
     *
     * @ORM\Column(name="moy_quiz", type="integer", nullable=false)
     */
    private $moyQuiz;

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quiz_id", referencedColumnName="id_quiz")
     * })
     */
    private $quiz;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    public function getIdUQ(): ?int
    {
        return $this->idUQ;
    }

    public function getMoyQuiz(): ?int
    {
        return $this->moyQuiz;
    }

    public function setMoyQuiz(int $moyQuiz): static
    {
        $this->moyQuiz = $moyQuiz;

        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): static
    {
        $this->quiz = $quiz;

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
