<?php

namespace App\Entity;

<<<<<<< HEAD
use App\Repository\ComposantRepository;
use Doctrine\ORM\Mapping as ORM;
=======
use App\Entity\Image;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ComposantRepository;
use Doctrine\Common\Collections\Collection;
>>>>>>> laïdine

/**
 * @ORM\Entity(repositoryClass=ComposantRepository::class)
 */
class Composant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_composant;

<<<<<<< HEAD
=======
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

>>>>>>> laïdine
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComposant(): ?string
    {
        return $this->nom_composant;
    }

    public function setNomComposant(string $nom_composant): self
    {
        $this->nom_composant = $nom_composant;

        return $this;
    }
<<<<<<< HEAD
=======

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
     /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setComposant($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getComposant() === $this) {
                $image->setComposant(null);
            }
        }

        return $this;
    }
>>>>>>> laïdine
}