<?php

namespace App\Entity;

use App\Repository\MedicamentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicamentsRepository::class)
 */
class Medicaments
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
    private $nom_commercial;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $Prix_Echantion;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contre_indication;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $effet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_med;

    public function getId(): ?int
    {
        return $this->id;
    }
    
  

    public function getNomCommercial(): ?string
    {
        return $this->nom_commercial;
    }

    public function setNomCommercial(string $nom_commercial): self
    {
        $this->nom_commercial = $nom_commercial;

        return $this;
    }

    public function getPrixEchantion(): ?string
    {
        return $this->Prix_Echantion;
    }

    public function setPrixEchantion(?string $Prix_Echantion): self
    {
        $this->Prix_Echantion = $Prix_Echantion;

        return $this;
    }

    public function getContreIndication(): ?string
    {
        return $this->contre_indication;
    }

    public function setContreIndication(?string $contre_indication): self
    {
        $this->contre_indication = $contre_indication;

        return $this;
    }

    public function getEffet(): ?string
    {
        return $this->effet;
    }

    public function setEffet(?string $effet): self
    {
        $this->effet = $effet;

        return $this;
    }

    public function getImageMed(): ?string
    {
        return $this->image_med;
    }

    public function setImageMed(?string $image_med): self
    {
        $this->image_med = $image_med;

        return $this;
    }
}
