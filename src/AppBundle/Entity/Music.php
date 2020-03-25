<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Music
 *
 * @ORM\Table(name="music")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MusicRepository")
 */
class Music
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="music_name", type="string", length=255)
     */
    private $musicName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set musicName
     *
     * @param string $musicName
     *
     * @return Music
     */
    public function setMusicName($musicName)
    {
        $this->musicName = $musicName;

        return $this;
    }

    /**
     * Get musicName
     *
     * @return string
     */
    public function getMusicName()
    {
        return $this->musicName;
    }
}

