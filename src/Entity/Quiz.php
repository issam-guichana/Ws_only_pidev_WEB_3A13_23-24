<?php

namespace App\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @var int|null
     *
     * @ORM\Column(name="formation_id", type="integer", nullable=true)
     */
    private $formationId;
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $imageFile;

    // Getter and Setter for imageFile
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(File $file = null)
    {
        $this->imageFile = $file;
    }

    // Getters and Setters

    public function getIdQuiz(): ?int
    {
        return $this->idQuiz;
    }

    public function getNomQuiz(): ?string
    {
        return $this->nomQuiz;
    }

    public function setNomQuiz(string $nomQuiz): self
    {
        $this->nomQuiz = $nomQuiz;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getFormationId(): ?int
    {
        return $this->formationId;
    }

    public function setFormationId(?int $formationId): self
    {
        $this->formationId = $formationId;
        return $this;
    }
}