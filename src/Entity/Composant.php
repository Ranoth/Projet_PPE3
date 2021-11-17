<?php

namespace App\Entity;

use App\Repository\ComposantRepository;
use Doctrine\ORM\Mapping as ORM;

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
}
