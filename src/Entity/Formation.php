<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $nomForm;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_id", referencedColumnName="id_cat")
     * })
     */
    private $cat;

    /**
     * @ORM\OneToMany(targetEntity="UserFormation", mappedBy="formation")
     */
    private $userFormations;

    public function __construct()
    {
        $this->userFormations = new ArrayCollection();
    }

    // Getters and setters for idForm

    public function getIdForm(): ?int
    {
        return $this->idForm;
    }

    // Getter and setter for nomForm

    public function getNomForm(): ?string
    {
        return $this->nomForm;
    }

    public function setNomForm(string $nomForm): self
    {
        $this->nomForm = $nomForm;

        return $this;
    }

    // Getter and setter for description

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    // Getter and setter for prix

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    // Getter and setter for cat

    public function getCat(): ?Categorie
    {
        return $this->cat;
    }

    public function setCat(?Categorie $cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * @return Collection|UserFormation[]
     */
    public function getUserFormations(): Collection
    {
        return $this->userFormations;
    }

    public function addUserFormation(UserFormation $userFormation): self
    {
        if (!$this->userFormations->contains($userFormation)) {
            $this->userFormations[] = $userFormation;
            $userFormation->setFormation($this);
        }

        return $this;
    }

    public function removeUserFormation(UserFormation $userFormation): self
    {
        if ($this->userFormations->removeElement($userFormation)) {
            // set the owning side to null (unless already changed)
            if ($userFormation->getFormation() === $this) {
                $userFormation->setFormation(null);
            }
        }

        return $this;
    }
}
