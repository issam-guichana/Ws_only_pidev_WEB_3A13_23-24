<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="quiz_id", columns={"quiz_id"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_quest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuest;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=2500, nullable=false)
     * @Assert\NotBlank(message="La question ne peut pas être vide.")
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=2500, nullable=false)
     * @Assert\NotBlank(message="Une réponse doit être sélectionnée.")
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="option1", type="string", length=2500, nullable=false)
     * @Assert\NotBlank(message="L'option 1 ne peut pas être vide.")
     */
    private $option1;

    /**
     * @var string
     *
     * @ORM\Column(name="option2", type="string", length=2500, nullable=false)
     * @Assert\NotBlank(message="L'option 2 ne peut pas être vide.")
     */
    private $option2;

    /**
     * @var string
     *
     * @ORM\Column(name="option3", type="string", length=2500, nullable=false)
     * @Assert\NotBlank(message="L'option 3 ne peut pas être vide.")
     */
    private $option3;

    /**
     * @var string
     *
     * @ORM\Column(name="option4", type="string", length=2500, nullable=false)
     * @Assert\NotBlank(message="L'option 4 ne peut pas être vide.")
     */
    private $option4;

    /**
     * @var int
     *
     * @ORM\Column(name="quiz_id", type="integer", nullable=false)
     */
    private $quizId;

    // Getters and Setters

    public function getIdQuest(): int
    {
        return $this->idQuest;
    }

    public function setIdQuest(int $idQuest): self
    {
        $this->idQuest = $idQuest;
        return $this;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;
        return $this;
    }

    public function getReponse(): string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;
        return $this;
    }

    public function getOption1(): string
    {
        return $this->option1;
    }

    public function setOption1(string $option1): self
    {
        $this->option1 = $option1;
        return $this;
    }

    public function getOption2(): string
    {
        return $this->option2;
    }

    public function setOption2(string $option2): self
    {
        $this->option2 = $option2;
        return $this;
    }

    public function getOption3(): string
    {
        return $this->option3;
    }

    public function setOption3(string $option3): self
    {
        $this->option3 = $option3;
        return $this;
    }

    public function getOption4(): string
    {
        return $this->option4;
    }

    public function setOption4(string $option4): self
    {
        $this->option4 = $option4;
        return $this;
    }

    public function getQuizId(): int
    {
        return $this->quizId;
    }

    public function setQuizId(int $quizId): self
    {
        $this->quizId = $quizId;
        return $this;
    }
}