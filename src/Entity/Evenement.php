<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 * @ORM\Table(name="evenement")
 * @Vich\Uploadable
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_event", type="integer")
     */
    private $idEvent;

    /**
     * @ORM\Column(name="description", type="string", length=2500)

     */
    private $description;

 /**
     * @ORM\Column(name="date_event", type="date")

     */
private $dateEvent;

     /**
     * @ORM\Column(name="heure_deb", type="time", nullable=true)
     */
    private $heureDeb;

    /**
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

     /**
     * @ORM\Column(name="nom_event", type="string", length=255)
    
     
     */
    private $nomEvent;

    /**
     * @ORM\Column(name="nbrP", type="integer")
     
     */
    private $nbrP;

    /**
     * @ORM\Column(name="lieu", type="string", length=100)
     
     */
    private $lieu;

    /**
     * @ORM\Column(name="image_event", type="string", length=255)
     */
    private $imageEvent;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imageEvent")
     * @var File|null
     * @Assert\File(
     *     maxSize="5M",
     *     mimeTypes={"image/jpeg", "image/png"},
     *     mimeTypesMessage="Please upload a valid image (JPEG or PNG) file"
     * )
     */
    private $imageFile;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
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

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(?\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;
        return $this;
    }

    public function getHeureDeb(): ?\DateTimeInterface
    {
        return $this->heureDeb;
    }

    public function setHeureDeb(?\DateTimeInterface $heureDeb): self
    {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;
        return $this;
    }

    public function getNbrP(): ?int
    {
        return $this->nbrP;
    }

    public function setNbrP(int $nbrP): self
    {
        $this->nbrP = $nbrP;
        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getImageEvent(): ?string
    {
        return $this->imageEvent;
    }

    public function setImageEvent(string $imageEvent): self
    {
        $this->imageEvent = $imageEvent;
        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    public function __toString(): string
    {
        return $this->nomEvent; // Return the name property as a string
    }
}
