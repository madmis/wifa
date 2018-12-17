<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Team
 * @package App\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="team")
 */
class Team
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
     * Relative path to the image
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="Player")
     * @ORM\JoinTable(
     *     name="team_players",
     *     joinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="palyer_id", referencedColumnName="id")}
     * )
     * @var Player[]|Collection
     */
    private $players;

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) : void
    {
        $this->id = $id;
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

    /**
     * @return Player[]|Collection
     */
    public function getPlayers() : Collection
    {
        return $this->players;
    }

    /**
     * @param Player[]|Collection $players
     */
    public function setPlayers(Collection $players) : void
    {
        $this->players = $players;
    }
}
