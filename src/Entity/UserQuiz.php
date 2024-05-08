<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQuiz
 *
 * @ORM\Table(name="user_quiz", indexes={@ORM\Index(name="quiz_id", columns={"quiz_id"}), @ORM\Index(name="user_id", columns={"user_id", "quiz_id"}), @ORM\Index(name="IDX_DE93B65BA76ED395", columns={"user_id"})})
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


}
