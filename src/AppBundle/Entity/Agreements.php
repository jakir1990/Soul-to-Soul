<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agreements
 *
 * @ORM\Table(name="agreements")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AgreementsRepository")
 */
class Agreements
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
     * @var int
     *
     * @ORM\Column(name="playingLeisure", type="integer")
     */
    private $playingLeisure;

    /**
     * @var int
     *
     * @ORM\Column(name="sportsInLeisure", type="integer")
     */
    private $sportsInLeisure;

    /**
     * @var int
     *
     * @ORM\Column(name="associations", type="integer")
     */
    private $associations;

    /**
     * @var string
     *
     * @ORM\Column(name="volunteering", type="integer")
     */
    private $volunteering;

    /**
     * @var int
     *
     * @ORM\Column(name="passions", type="integer")
     */
    private $passions;

    /**
     * @var int
     *
     * @ORM\Column(name="others", type="integer")
     */
    private $userId;

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
     * Set playingLeisure
     *
     * @param string $playingLeisure
     *
     * @return Agreements
     */
    public function setPlayingLeisure($playingLeisure)
    {
        $this->playingLeisure = $playingLeisure;

        return $this;
    }

    /**
     * Get playingLeisure
     *
     * @return int
     */
    public function getPlayingLeisure()
    {
        return $this->playingLeisure;
    }

    /**
     * Set sportsInLeisure
     *
     * @param string $sportsInLeisure
     *
     * @return Agreements
     */
    public function setSportsInLeisure($sportsInLeisure)
    {
        $this->sportsInLeisure = $sportsInLeisure;

        return $this;
    }

    /**
     * Get sportsInLeisure
     *
     * @return int
     */
    public function getSportsInLeisure()
    {
        return $this->sportsInLeisure;
    }

    /**
     * Set associations
     *
     * @param integer $associations
     *
     * @return Agreements
     */
    public function setAssociations($associations)
    {
        $this->associations = $associations;

        return $this;
    }

    /**
     * Get associations
     *
     * @return int
     */
    public function getAssociations()
    {
        return $this->associations;
    }

    /**
     * Set volunteering
     *
     * @param string $volunteering
     *
     * @return Agreements
     */
    public function setVolunteering($volunteering)
    {
        $this->volunteering = $volunteering;

        return $this;
    }

    /**
     * Get volunteering
     *
     * @return int
     */
    public function getVolunteering()
    {
        return $this->volunteering;
    }

    /**
     * Set passions
     *
     * @param integer $passions
     *
     * @return Agreements
     */
    public function setPassions($passions)
    {
        $this->passions = $passions;

        return $this;
    }

    /**
     * Get passions
     *
     * @return int
     */
    public function getPassions()
    {
        return $this->passions;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

