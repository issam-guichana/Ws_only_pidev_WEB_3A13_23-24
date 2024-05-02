<?php

namespace App\Entity;

use App\Repository\BadgeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass=BadgeRepository::class)
 * @ORM\Table(name="badge")
 * @Vich\Uploadable
 */
class Badge
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_badge", type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $nomBadge = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $type = null;

    /**
     * @ORM\Column(name="img_badge", type="string", length=255)
     */
    private ?string $imgBadge;

    /**
     * @Vich\UploadableField(mapping="badge_images", fileNameProperty="imgBadge")
     */
    private $imageFile;

    /**
     * @ORM\OneToMany(targetEntity=UsrBadge::class, mappedBy="idBadge")
     */
    private $usrBadges;

    public function __construct()
    {
        $this->usrBadges = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNomBadge(): ?string
    {
        return $this->nomBadge;
    }

    public function setNomBadge(string $nomBadge): self
    {
        $this->nomBadge = $nomBadge;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getImgBadge(): ?string
    {
        return $this->imgBadge;
    }

    public function setImgBadge(string $imgBadge): self
    {
        $this->imgBadge = $imgBadge;
        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile($imageFile): void
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return Collection|UsrBadge[]
     */
    public function getUsrBadges(): Collection
    {
        return $this->usrBadges;
    }
}
