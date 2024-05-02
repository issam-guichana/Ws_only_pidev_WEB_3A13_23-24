<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQuiz
 *
 * @ORM\Table(name="user_quiz", indexes={@ORM\Index(name="quiz_id", columns={"quiz_id"}), @ORM\Index(name="user_id", columns={"user_id", "quiz_id"})})
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="quiz_id", type="integer", nullable=false)
     */
    private $quizId;


}
