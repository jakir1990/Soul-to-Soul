<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Complementerities
 *
 * @ORM\Table(name="complementerities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComplementeritiesRepository")
 */
class Complementerities
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
     * @ORM\Column(name="qualities", type="integer")
     */
    private $qualities;

    /**
     * @var int
     *
     * @ORM\Column(name="temperament", type="integer")
     */
    private $temperament;

    /**
     * @var int
     *
     * @ORM\Column(name="what_i_dont", type="integer")
     */
    private $whatIDont;

    /**
     * @var int
     *
     * @ORM\Column(name="my_ideal", type="integer")
     */
    private $myIdeal;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
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
     * Set qualities
     *
     * @param integer $qualities
     *
     * @return Complementerities
     */
    public function setQualities($qualities)
    {
        $this->qualities = $qualities;

        return $this;
    }

    /**
     * Get qualities
     *
     * @return int
     */
    public function getQualities()
    {
        return $this->qualities;
    }

    /**
     * Set temperament
     *
     * @param integer $temperament
     *
     * @return Complementerities
     */
    public function setTemperament($temperament)
    {
        $this->temperament = $temperament;

        return $this;
    }

    /**
     * Get temperament
     *
     * @return int
     */
    public function getTemperament()
    {
        return $this->temperament;
    }

    /**
     * Set whatIDont
     *
     * @param integer $whatIDont
     *
     * @return Complementerities
     */
    public function setWhatIDont($whatIDont)
    {
        $this->whatIDont = $whatIDont;

        return $this;
    }

    /**
     * Get whatIDont
     *
     * @return int
     */
    public function getWhatIDont()
    {
        return $this->whatIDont;
    }

    /**
     * Set myIdeal
     *
     * @param integer $myIdeal
     *
     * @return Complementerities
     */
    public function setMyIdeal($myIdeal)
    {
        $this->myIdeal = $myIdeal;

        return $this;
    }

    /**
     * Get myIdeal
     *
     * @return int
     */
    public function getMyIdeal()
    {
        return $this->myIdeal;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Complementerities
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId() {
        return $this->userId;
    }

}

