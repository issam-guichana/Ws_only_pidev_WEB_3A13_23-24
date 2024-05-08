<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFormation
 *
 * @ORM\Table(name="user_formation", indexes={@ORM\Index(name="certif_id", columns={"certif_id"}), @ORM\Index(name="user_id", columns={"user_id", "form_id"}), @ORM\Index(name="form_id", columns={"form_id"}), @ORM\Index(name="IDX_40A0AC5BA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserFormation
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_u_f", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userUF;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="form_id", referencedColumnName="id_form")
     * })
     */
    private $form;

    /**
     * @var \Certificat
     *
     * @ORM\ManyToOne(targetEntity="Certificat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certif_id", referencedColumnName="id_certif")
     * })
     */
    private $certif;


}
