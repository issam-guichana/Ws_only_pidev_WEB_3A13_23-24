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


}
