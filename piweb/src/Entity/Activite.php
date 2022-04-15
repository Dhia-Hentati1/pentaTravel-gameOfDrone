<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message=" Libele est obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un Libele au mini de 4 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $libele;

    /**
     * @Assert\NotBlank(message=" Prix est obligatoire")
     * @ORM\Column(type="float")
     * @Assert\Type(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emplacement;


    /**
     * @Assert\NotBlank(message="description  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     * @ORM\Column(type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     *
     * @Assert\NotBlank(message=" Type est obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un Libele au mini de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @Assert\NotBlank(message=" Avis est obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un Libele au mini de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $avis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibele(): ?string
    {
        return $this->libele;
    }

    public function setLibele(string $libele): self
    {
        $this->libele = $libele;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

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
}
