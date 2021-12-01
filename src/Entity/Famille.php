<?php

namespace App\Entity;

use App\Repository\FamilleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilleRepository::class)
 */
class Famille
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_famille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_fml;

    public function getId(): ?int
    {
        return $this->id;
    }
 

    public function getNomFamille(): ?string
    {
        return $this->nom_famille;
    }

    public function setNomFamille(string $nom_famille): self
    {
        $this->nom_famille = $nom_famille;

        return $this;
    }

    public function getImageFml(): ?string
    {
        return $this->image_fml;
    }

    public function setImageFml(?string $image_fml): self
    {
        $this->image_fml = $image_fml;

        return $this;
    }
}
