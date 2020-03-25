<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserToWantToMeet
 *
 * @ORM\Table(name="user_to_want_to_meet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserToWantToMeetRepository")
 */
class UserToWantToMeet
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
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="want_to_meet", type="text")
     */
    private $wantToMeet;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return UserToWantToMeet
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

    /**
     * Set wantToMeet
     *
     * @param string $wantToMeet
     *
     * @return UserToWantToMeet
     */
    public function setWantToMeet($wantToMeet)
    {
        $this->wantToMeet = $wantToMeet;

        return $this;
    }

    /**
     * Get wantToMeet
     *
     * @return string
     */
    public function getWantToMeet()
    {
        return $this->wantToMeet;
    }
}

