<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expectations
 *
 * @ORM\Table(name="expectations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserAcceptationRepository")
 */
class Expectations
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
     * @ORM\Column(name="projects", type="integer")
     */
    private $projects;

    /**
     * @var int
     *
     * @ORM\Column(name="dream", type="integer")
     */
    private $dream;

    /**
     * @var int
     *
     * @ORM\Column(name="others", type="integer")
     */
    private $others;

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
     * Set projects
     *
     * @param integer $projects
     *
     * @return Expectations
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;

        return $this;
    }

    /**
     * Get projects
     *
     * @return int
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Set dream
     *
     * @param integer $dream
     *
     * @return Expectations
     */
    public function setDream($dream)
    {
        $this->dream = $dream;

        return $this;
    }

    /**
     * Set others
     *
     * @param integer $others
     *
     * @return Expectations
     */
    public function setOthers($others)
    {
        $this->others = $others;

        return $this;
    }

    /**
     * Get others
     *
     * @return int
     */
    public function getOthers()
    {
        return $this->others;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Expectations
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

