<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 */
class Patient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pathologie;


    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="patient")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="patients", orphanRemoval=true, cascade = {"persist"})
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $atmp;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $IMC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $epaule;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $centre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabac;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diabete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retraite;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getPathologie(): ?string
    {
        return $this->pathologie;
    }

    public function setPathologie(?string $pathologie): self
    {
        $this->pathologie = $pathologie;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setPatients($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getPatients() === $this) {
                $image->setPatients(null);
            }
        }

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getAtmp(): ?string
    {
        return $this->atmp;
    }

    public function setAtmp(?string $atmp): self
    {
        $this->atmp = $atmp;

        return $this;
    }

    public function getIMC(): ?float
    {
        return $this->IMC;
    }

    public function setIMC(?float $IMC): self
    {
        $this->IMC = $IMC;

        return $this;
    }

    public function getEpaule(): ?string
    {
        return $this->epaule;
    }

    public function setEpaule(?string $epaule): self
    {
        $this->epaule = $epaule;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getCentre(): ?string
    {
        return $this->centre;
    }

    public function setCentre(?string $centre): self
    {
        $this->centre = $centre;

        return $this;
    }

    public function getTabac(): ?string
    {
        return $this->tabac;
    }

    public function setTabac(?string $tabac): self
    {
        $this->tabac = $tabac;

        return $this;
    }

    public function getDiabete(): ?string
    {
        return $this->diabete;
    }

    public function setDiabete(?string $diabete): self
    {
        $this->diabete = $diabete;

        return $this;
    }

    public function getRetraite(): ?string
    {
        return $this->retraite;
    }

    public function setRetraite(?string $retraite): self
    {
        $this->retraite = $retraite;

        return $this;
    }
}
