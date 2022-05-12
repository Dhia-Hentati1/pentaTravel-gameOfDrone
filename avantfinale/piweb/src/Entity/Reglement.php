<?php

namespace App\Entity;

use App\Repository\ReglementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReglementRepository::class)
 */
class Reglement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateoperation;

    /**
     * @Assert\NotBlank(message=" Montant est obligatoire")
     * @Assert\Type(type="float")
     * @ORM\Column(type="float")
     */
        private $montant;

    /**
     * @Assert\NotBlank(message=" mode de paiement est obligatoire")
     * @ORM\Column(type="string", length=255)
     */
    private $modedepaiement;

    /**
     * @ORM\Column(type="date")
     */
    private $echeancier;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="reglements")
     */
    private $utilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateoperation(): ?\DateTimeInterface
    {
        return $this->dateoperation;
    }

    public function setDateoperation(\DateTimeInterface $dateoperation): self
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getModedepaiement(): ?string
    {
        return $this->modedepaiement;
    }

    public function setModedepaiement(string $modedepaiement): self
    {
        $this->modedepaiement = $modedepaiement;

        return $this;
    }

    public function getEcheancier(): ?\DateTimeInterface
    {
        return $this->echeancier;
    }

    public function setEcheancier(\DateTimeInterface $echeancier): self
    {
        $this->echeancier = $echeancier;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
