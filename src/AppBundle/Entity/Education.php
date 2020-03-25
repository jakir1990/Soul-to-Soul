<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="education")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EducationRepository")
 */
class Education
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
     * @ORM\Column(name="degree", type="integer")
     */
    private $degree;

    /**
     * @var int
     *
     * @ORM\Column(name="commitments", type="integer")
     */
    private $commitments;

    /**
     * @var int
     *
     * @ORM\Column(name="policies", type="integer")
     */
    private $policies;
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
     * Set degree
     *
     * @param integer $degree
     *
     * @return Education
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return int
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Set commitments
     *
     * @param integer $commitments
     *
     * @return Education
     */
    public function setCommitments($commitments)
    {
        $this->commitments = $commitments;

        return $this;
    }

    /**
     * Get commitments
     *
     * @return int
     */
    public function getCommitments()
    {
        return $this->commitments;
    }

    /**
     * Set policies
     *
     * @param integer $policies
     *
     * @return Education
     */
    public function setPolicies($policies)
    {
        $this->policies = $policies;

        return $this;
    }

    /**
     * Get policies
     *
     * @return int
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Education
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

