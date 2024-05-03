<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table(name="badge")
 * @ORM\Entity
 */
class Badge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_badge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBadge;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_badge", type="string", length=255, nullable=false)
     */
    private $nomBadge;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="img_badge", type="string", length=500, nullable=false)
     */
    private $imgBadge;

    public function getIdBadge(): ?int
    {
        return $this->idBadge;
    }

    public function getNomBadge(): ?string
    {
        return $this->nomBadge;
    }

    public function setNomBadge(string $nomBadge): static
    {
        $this->nomBadge = $nomBadge;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getImgBadge(): ?string
    {
        return $this->imgBadge;
    }

    public function setImgBadge(string $imgBadge): static
    {
        $this->imgBadge = $imgBadge;

        return $this;
    }


}
