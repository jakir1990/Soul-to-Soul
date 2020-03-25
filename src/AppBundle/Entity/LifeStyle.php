<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LifeStyle
 *
 * @ORM\Table(name="life_style")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LifeStyleRepository")
 */
class LifeStyle
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
     * @ORM\Column(name="foods", type="integer")
     */
    private $foods;

    /**
     * @var int
     *
     * @ORM\Column(name="i_cook", type="integer")
     */
    private $iCook;

    /**
     * @var int
     *
     * @ORM\Column(name="alcohol", type="integer")
     */
    private $alcohol;

    /**
     * @var int
     *
     * @ORM\Column(name="tabac", type="integer")
     */
    private $tabac;

    /**
     * @var int
     *
     * @ORM\Column(name="pet_animal", type="integer")
     */
    private $petAnimal;

    /**
     * @var int
     *
     * @ORM\Column(name="confessions", type="integer")
     */
    private $confessions;

    /**
     * @var int
     *
     * @ORM\Column(name="nationality", type="integer")
     */
    private $nationality;

    /**
     * @var int
     *
     * @ORM\Column(name="origin", type="integer")
     */
    private $origin;

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
     * Set foods
     *
     * @param integer $foods
     *
     * @return LifeStyle
     */
    public function setFoods($foods)
    {
        $this->foods = $foods;

        return $this;
    }

    /**
     * Get foods
     *
     * @return int
     */
    public function getFoods()
    {
        return $this->foods;
    }

    /**
     * Set iCook
     *
     * @param integer $iCook
     *
     * @return LifeStyle
     */
    public function setICook($iCook)
    {
        $this->iCook = $iCook;

        return $this;
    }

    /**
     * Get iCook
     *
     * @return int
     */
    public function getICook()
    {
        return $this->iCook;
    }

    /**
     * Set alcohol
     *
     * @param integer $alcohol
     *
     * @return LifeStyle
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * Get alcohol
     *
     * @return int
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set tabac
     *
     * @param integer $tabac
     *
     * @return LifeStyle
     */
    public function setTabac($tabac)
    {
        $this->tabac = $tabac;

        return $this;
    }

    /**
     * Get tabac
     *
     * @return int
     */
    public function getTabac()
    {
        return $this->tabac;
    }

    /**
     * Set petAnimal
     *
     * @param integer $petAnimal
     *
     * @return LifeStyle
     */
    public function setPetAnimal($petAnimal)
    {
        $this->petAnimal = $petAnimal;

        return $this;
    }

    /**
     * Get petAnimal
     *
     * @return int
     */
    public function getPetAnimal()
    {
        return $this->petAnimal;
    }

    /**
     * Set confessions
     *
     * @param integer $confessions
     *
     * @return LifeStyle
     */
    public function setConfessions($confessions)
    {
        $this->confessions = $confessions;

        return $this;
    }

    /**
     * Get confessions
     *
     * @return int
     */
    public function getConfessions()
    {
        return $this->confessions;
    }
    /**
     * Set nationality
     *
     * @param integer $nationality
     *
     * @return LifeStyle
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return int
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set origin
     *
     * @param integer $origin
     *
     * @return LifeStyle
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return LifeStyle
     */
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

