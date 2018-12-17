<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Player
 * @package App\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="player")
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", precision=3, scale=2)
     * @var float
     */
    private $powerFactor;

    /**
     * Waves token id.
     * Token has quantity 1. And should be reissuable.
     * @ORM\Column(type="string", length=50, nullable=true)
     * @var string|null
     */
    private $assetId;

    /**
     * Relative path to the image
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $image;


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPowerFactor() : float
    {
        return $this->powerFactor;
    }

    /**
     * @param float $powerFactor
     */
    public function setPowerFactor(float $powerFactor) : void
    {
        $this->powerFactor = $powerFactor;
    }

    /**
     * @return string|null
     */
    public function getAssetId() : ?string
    {
        return $this->assetId;
    }

    /**
     * @param string|null $assetId
     */
    public function setAssetId(?string $assetId) : void
    {
        $this->assetId = $assetId;
    }

    /**
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image) : void
    {
        $this->image = $image;
    }
}
