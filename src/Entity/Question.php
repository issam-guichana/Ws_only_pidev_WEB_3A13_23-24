<?php

namespace App\Entity;

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
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=2500, nullable=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="option1", type="string", length=2500, nullable=false)
     */
    private $option1;

    /**
     * @var string
     *
     * @ORM\Column(name="option2", type="string", length=2500, nullable=false)
     */
    private $option2;

    /**
     * @var string
     *
     * @ORM\Column(name="option3", type="string", length=2500, nullable=false)
     */
    private $option3;

    /**
     * @var string
     *
     * @ORM\Column(name="option4", type="string", length=2500, nullable=false)
     */
    private $option4;

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quiz_id", referencedColumnName="id_quiz")
     * })
     */
    private $quiz;

    public function getIdQuest(): ?int
    {
        return $this->idQuest;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getOption1(): ?string
    {
        return $this->option1;
    }

    public function setOption1(string $option1): static
    {
        $this->option1 = $option1;

        return $this;
    }

    public function getOption2(): ?string
    {
        return $this->option2;
    }

    public function setOption2(string $option2): static
    {
        $this->option2 = $option2;

        return $this;
    }

    public function getOption3(): ?string
    {
        return $this->option3;
    }

    public function setOption3(string $option3): static
    {
        $this->option3 = $option3;

        return $this;
    }

    public function getOption4(): ?string
    {
        return $this->option4;
    }

    public function setOption4(string $option4): static
    {
        $this->option4 = $option4;

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


}
