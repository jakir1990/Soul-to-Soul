<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instructions
 *
 * @ORM\Table(name="instructions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonalityRepository")
 */
class Instructions
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
     * @ORM\Column(name="professions", type="integer")
     */
    private $professions;

    /**
     * @var int
     *
     * @ORM\Column(name="degrees", type="integer")
     */
    private $degrees;

    /**
     * @var int
     *
     * @ORM\Column(name="school_curriculum", type="integer")
     */
    private $schoolCurriculum;

    /**
     * @var int
     *
     * @ORM\Column(name="languages", type="integer")
     */
    private $languages;

    /**
     * @var int
     *
     * @ORM\Column(name="curriculum_vitae", type="integer")
     */
    private $curriculumVitae;

    /**
     * @var int
     *
     * @ORM\Column(name="cover_letter", type="integer")
     */
    private $coverLetter;

    /**
     * @var int
     *
     * @ORM\Column(name="portfolio", type="integer")
     */
    private $portfolio;

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
     * Set professions
     *
     * @param integer $professions
     *
     * @return Instructions
     */
    public function setProfessions($professions)
    {
        $this->professions = $professions;

        return $this;
    }

    /**
     * Get professions
     *
     * @return int
     */
    public function getProfessions()
    {
        return $this->professions;
    }

    /**
     * Set degrees
     *
     * @param integer $degrees
     *
     * @return Instructions
     */
    public function setDegrees($degrees)
    {
        $this->degrees = $degrees;

        return $this;
    }

    /**
     * Get degrees
     *
     * @return int
     */
    public function getDegrees()
    {
        return $this->degrees;
    }

    /**
     * Set schoolCurriculum
     *
     * @param integer $schoolCurriculum
     *
     * @return Instructions
     */
    public function setSchoolCurriculum($schoolCurriculum)
    {
        $this->schoolCurriculum = $schoolCurriculum;

        return $this;
    }

    /**
     * Get schoolCurriculum
     *
     * @return int
     */
    public function getSchoolCurriculum()
    {
        return $this->schoolCurriculum;
    }

    /**
     * Set languages
     *
     * @param integer $languages
     *
     * @return Instructions
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return int
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set curriculumVitae
     *
     * @param integer $curriculumVitae
     *
     * @return Instructions
     */
    public function setCurriculumVitae($curriculumVitae)
    {
        $this->curriculumVitae = $curriculumVitae;

        return $this;
    }

    /**
     * Get curriculumVitae
     *
     * @return int
     */
    public function getCurriculumVitae()
    {
        return $this->curriculumVitae;
    }

    /**
     * Set coverLetter
     *
     * @param integer $coverLetter
     *
     * @return Instructions
     */
    public function setCoverLetter($coverLetter)
    {
        $this->coverLetter = $coverLetter;

        return $this;
    }

    /**
     * Get coverLetter
     *
     * @return int
     */
    public function getCoverLetter()
    {
        return $this->coverLetter;
    }

    /**
     * Set portfolio
     *
     * @param integer $portfolio
     *
     * @return Instructions
     */
    public function setPortfolio($portfolio)
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    /**
     * Get portfolio
     *
     * @return int
     */
    public function getpPortfolior()
    {
        return $this->portfolio;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Instructions
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

