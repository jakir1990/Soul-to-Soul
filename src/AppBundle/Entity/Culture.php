<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Culture
 *
 * @ORM\Table(name="culture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CultureRepository")
 */
class Culture
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
     * @ORM\Column(name="music", type="integer")
     */
    private $music;

    /**
     * @var int
     *
     * @ORM\Column(name="musical_instrument", type="integer")
     */
    private $musicalInstrument;

    /**
     * @var int
     *
     * @ORM\Column(name="literature", type="integer")
     */
    private $literature;

    /**
     * @var int
     *
     * @ORM\Column(name="cinema", type="integer")
     */
    private $cinema;

    /**
     * @var int
     *
     * @ORM\Column(name="tv_series", type="integer")
     */
    private $tvSeries;

    /**
     * @var int
     *
     * @ORM\Column(name="documentaries", type="integer")
     */
    private $documentaries;

    /**
     * @var int
     *
     * @ORM\Column(name="arts", type="integer")
     */
    private $arts;

    /**
     * @var int
     *
     * @ORM\Column(name="sciences", type="integer")
     */
    private $sciences;

    /**
     * @var int
     *
     * @ORM\Column(name="photography", type="integer")
     */
    private $photography;

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
     * Set music
     *
     * @param integer $music
     *
     * @return Culture
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * Get music
     *
     * @return int
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * Set musicalInstrument
     *
     * @param integer $musicalInstrument
     *
     * @return Culture
     */
    public function setMusicalInstrument($musicalInstrument)
    {
        $this->musicalInstrument = $musicalInstrument;

        return $this;
    }

    /**
     * Get musicalInstrument
     *
     * @return int
     */
    public function getMusicalInstrument()
    {
        return $this->musicalInstrument;
    }

    /**
     * Set literature
     *
     * @param integer $literature
     *
     * @return Culture
     */
    public function setLiterature($literature)
    {
        $this->literature = $literature;

        return $this;
    }

    /**
     * Get literature
     *
     * @return int
     */
    public function getLiterature()
    {
        return $this->literature;
    }

    /**
     * Set cinema
     *
     * @param integer $cinema
     *
     * @return Culture
     */
    public function setCinema($cinema)
    {
        $this->cinema = $cinema;

        return $this;
    }

    /**
     * Get cinema
     *
     * @return int
     */
    public function getCinema()
    {
        return $this->cinema;
    }

    /**
     * Set tvSeries
     *
     * @param integer $tvSeries
     *
     * @return Culture
     */
    public function setTvSeries($tvSeries)
    {
        $this->tvSeries = $tvSeries;

        return $this;
    }

    /**
     * Get tbSeries
     *
     * @return int
     */
    public function getTvSeries()
    {
        return $this->tvSeries;
    }

    /**
     * Set documentaries
     *
     * @param integer $documentaries
     *
     * @return Culture
     */
    public function setDocumentaries($documentaries)
    {
        $this->documentaries = $documentaries;

        return $this;
    }

    /**
     * Get documentaries
     *
     * @return int
     */
    public function getDocumentaries()
    {
        return $this->documentaries;
    }

    /**
     * Set arts
     *
     * @param integer $arts
     *
     * @return Culture
     */
    public function setArts($arts)
    {
        $this->arts = $arts;

        return $this;
    }

    /**
     * Get arts
     *
     * @return int
     */
    public function getArts()
    {
        return $this->arts;
    }

    /**
     * Set sciences
     *
     * @param integer $sciences
     *
     * @return Culture
     */
    public function setSciences($sciences)
    {
        $this->sciences = $sciences;

        return $sciences;
    }

    /**
     * Get sciences
     *
     * @return int
     */
    public function getSciences()
    {
        return $this->sciences;
    }

    /**
     * Set photography
     *
     * @param integer $photography
     *
     * @return Culture
     */
    public function setPhotography($photography)
    {
        $this->photography = $photography;

        return $photography;
    }

    /**
     * Get photography
     *
     * @return int
     */
    public function getPhotography()
    {
        return $this->photography;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Culture
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

