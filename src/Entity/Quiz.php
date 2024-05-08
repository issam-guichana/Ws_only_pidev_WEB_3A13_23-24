<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz", indexes={@ORM\Index(name="formation_id", columns={"formation_id"})})
 * @ORM\Entity
 */
class Quiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_quiz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuiz;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_quiz", type="string", length=20, nullable=false)
     */
    private $nomQuiz;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=5000, nullable=false)
     */
    private $image;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formation_id", referencedColumnName="id_form")
     * })
     */
    private $formation;


}
