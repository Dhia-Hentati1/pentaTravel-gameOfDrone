<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("utilisateur")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateur")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateur")
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * @Groups("utilisateur")
     */
    private $datedenaissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateur")
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateur")
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateur")
     */
    private $mdp;

    /**
     * @ORM\ManyToOne(targetEntity=Activite::class, inversedBy="utilisateurs")
     * @Groups("utilisateur")
     */
    private $activite;

    /**
     * @ORM\OneToMany(targetEntity=Reglement::class, mappedBy="utilisateur")
     * @Groups("utilisateur")
     */
    private $reglements;

    public function __construct()
    {
        $this->reglements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatedenaissance(): ?\DateTimeInterface
    {
        return $this->datedenaissance;
    }

    public function setDatedenaissance(\DateTimeInterface $datedenaissance): self
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(?Activite $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * @return Collection<int, Reglement>
     */
    public function getReglements(): Collection
    {
        return $this->reglements;
    }

    public function addReglement(Reglement $reglement): self
    {
        if (!$this->reglements->contains($reglement)) {
            $this->reglements[] = $reglement;
            $reglement->setUtilisateur($this);
        }

        return $this;
    }

    public function removeReglement(Reglement $reglement): self
    {
        if ($this->reglements->removeElement($reglement)) {
            // set the owning side to null (unless already changed)
            if ($reglement->getUtilisateur() === $this) {
                $reglement->setUtilisateur(null);
            }
        }

        return $this;
    }
}
