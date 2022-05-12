<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("utilisateur")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @Assert\NotBlank(message=" Libele est obligatoire")
     * @Assert\Length(
     *      min = 4,
     *      minMessage=" Entrer un Libele au mini de 4 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $libele;

    /**
     * @Assert\NotBlank(message=" Prix est obligatoire")
     * @ORM\Column(type="float")
     * @Assert\Type(type="float")
     * @Groups("post:read")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
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
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Groups("post:read")
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
     * @Groups("post:read")
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
     * @Groups("post:read")
     */
    private $avis;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="activite",cascade={"all"},orphanRemoval=true)
     */
    private $utilisateurs;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }

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

    public function getImage()
    {
        return $this->image;
    }

    public function setImage( $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->setActivite($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getActivite() === $this) {
                $utilisateur->setActivite(null);
            }
        }

        return $this;
    }
}
