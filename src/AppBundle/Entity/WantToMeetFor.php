<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WantToMeetFor
 *
 * @ORM\Table(name="want_to_meet_for")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WantToMeetForRepository")
 */
class WantToMeetFor
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
     * @ORM\Column(name="meet_for", type="string", length=255)
     */
    private $meetFor;


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
     * Set meetFor
     *
     * @param string $meetFor
     *
     * @return WantToMeetFor
     */
    public function setMeetFor($meetFor)
    {
        $this->meetFor = $meetFor;

        return $this;
    }

    /**
     * Get meetFor
     *
     * @return string
     */
    public function getMeetFor()
    {
        return $this->meetFor;
    }
}

