<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pub
 *
 * @ORM\Table(name="pub")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PubRepository")
 */
class Pub
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
     * @ORM\Column(name="pub_name", type="string", length=255)
     */
    private $pubName;


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
     * Set pubName
     *
     * @param string $pubName
     *
     * @return Pub
     */
    public function setPubName($pubName)
    {
        $this->pubName = $pubName;

        return $this;
    }

    /**
     * Get pubName
     *
     * @return string
     */
    public function getPubName()
    {
        return $this->pubName;
    }
}

