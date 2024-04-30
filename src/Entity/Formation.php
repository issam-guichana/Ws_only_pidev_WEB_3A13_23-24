<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="formation_ibfk_1", columns={"cat_id"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_form", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForm;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_form", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Le nom de la formation est obligatoire.")
     */
    private $nomForm;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="La description de la formation est obligatoire.")
     */
    private $description;

    /**
     * @var \App\Entity\Categorie|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_id", referencedColumnName="id_cat")
     * })
     * @Assert\NotBlank(message="La catégorie est obligatoire.")
     */
    private $cat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     * @Assert\DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     * @Assert\DateTime
     */
    private $dateFin;

    /**
     * @var Collection|UserFormation[]
     *
     * @ORM\OneToMany(targetEntity="App\Entity\UserFormation", mappedBy="formation")
     */
    private $userFormations;

    public function __construct()
    {
        $this->userFormations = new ArrayCollection();
        // Initialize dates to null by default
        $this->dateDebut = null;
        $this->dateFin = null;
    }

    public function getIdForm(): ?int
    {
        return $this->idForm;
    }

    public function getNomForm(): ?string
    {
        return $this->nomForm;
    }

    public function setNomForm(string $nomForm): self
    {
        $this->nomForm = $nomForm;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getCat(): ?Categorie
    {
        return $this->cat;
    }

    public function setCat(?Categorie $cat): self
    {
        $this->cat = $cat;
        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTime $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTime $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getUserFormations(): Collection
    {
        return $this->userFormations;
    }

    public function getFormateurs(): Collection
    {
        return $this->userFormations->filter(function ($userFormation) {
            return $userFormation->getRole() === 'FORMATEUR';
        });
    }

    public function getParticipants(): Collection
    {
        return $this->userFormations->filter(function ($userFormation) {
            return $userFormation->getRole() === 'CLIENT';
        });
    }

    public function addUserFormation(UserFormation $userFormation): self
    {
        if (!$this->userFormations->contains($userFormation)) {
            $this->userFormations[] = $userFormation;
            $userFormation->setFormation($this);
        }

        return $this;
    }
}
