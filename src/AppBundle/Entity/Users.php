<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=255, nullable=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=50, nullable=false)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_date", type="string", length=20, nullable=true)
     */
    private $birthDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer",nullable=false)
     */
    private $countryId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     */
    private $cityId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="music_id", type="integer",nullable=false)
     */
    private $musicId;

    /**
     * @var integer
     *
     * @ORM\Column(name="film_id", type="integer",nullable=false)
     */
    private $filmId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub_id", type="integer",nullable=false)
     */
    private $pubId;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_text", type="string",length=255, nullable=true)
     */
    private $preText;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_media_url", type="string",length=255, nullable=true)
     */
    private $preMediaUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="forgot_code", type="string", length=45, nullable=true)
     */
    private $forgotCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=false)
     */
    private $isActive = '1';

    /**
     * @ORM\Column(name= "role", type="string", length=50)
     */
    private $role='ROLE_USER';

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUserName($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Users
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Users
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set birthDate
     *
     * @param string $birthDate
     *
     * @return Users
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

     /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return Users
     */
    public function setCountryId($countryId) {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId() {
        return $this->countryId;
    }

    
     /**
     * Set cityId
     *
     * @param integer $cityId
     *
     * @return Users
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer
     */
    public function getCityId()
    {
        return $this->cityId;
    }
    
     /**
     * Set musicId
     *
     * @param integer $musicId
     *
     * @return Users
     */
    public function setMusicId($musicId)
    {
        $this->musicId = $musicId;

        return $this;
    }

    /**
     * Get musicId
     *
     * @return integer
     */
    public function getMusicId()
    {
        return $this->musicId;
    }

    /**
     * Set filmId
     *
     * @param integer $filmId
     *
     * @return Users
     */
    public function setFilmId($filmId)
    {
        $this->filmId = $filmId;

        return $this;
    }

    /**
     * Get filmId
     *
     * @return integer
     */
    public function getFilmId()
    {
        return $this->filmId;
    }

    /**
     * Set pubId
     *
     * @param integer $pubId
     *
     * @return Users
     */
    public function setPubId($pubId)
    {
        $this->pubId = $pubId;

        return $this;
    }

    /**
     * Get pubId
     *
     * @return integer
     */
    public function getPubId()
    {
        return $this->pubId;
    }

    /**
     * Set preText
     *
     * @param string $preText
     *
     * @return Users
     */
    public function setPreText($preText)
    {
        $this->preText = $preText;

        return $this;
    }

    /**
     * Get preText
     *
     * @return string
     */
    public function getPreText()
    {
        return $this->preText;
    }

    /**
     * Set preMediaUrl
     *
     * @param string $preMediaUrl
     *
     * @return Users
     */
    public function setPreMediaUrl($preMediaUrl)
    {
        $this->preMediaUrl = $preMediaUrl;

        return $this;
    }

    /**
     * Get preMediaUrl
     *
     * @return string
     */
    public function getPreMediaUrl()
    {
        return $this->preMediaUrl;
    }

    /**
     * Set forgotCode
     *
     * @param string $forgotCode
     *
     * @return Users
     */
    public function setForgotCode($forgotCode)
    {
        $this->forgotCode = $forgotCode;
        return $this;
    }

    /**
     * Get forgotCode
     *
     * @return string
     */
    public function getForgotCode()
    {
        return $this->forgotCode;
    }

    /**
     * Set isActive
     *
     * @param integer $isActive
     *
     * @return Users
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function getSalt()
    {
// you *may* need a real salt depending on your encoder
// see section on salt below
        return null;
    }

    public function eraseCredentials()
    {
    }
    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function getRoles()
    {
        return array($this->role);
    }

    public function setRoles($role)
    {
        $this->role = $role;
        return $this;
    }


    /**
     * Set role
     *
     * @param string $role
     *
     * @return Users
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
