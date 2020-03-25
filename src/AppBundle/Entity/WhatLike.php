<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WhatLike
 *
 * @ORM\Table(name="what_like")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WhatLikeRepository")
 */
class WhatLike
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
     * @ORM\Column(name="ref_user_id", type="integer")
     */
    private $refUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="favorite_film", type="integer")
     */
    private $favoriteFilm;

    /**
     * @var int
     *
     * @ORM\Column(name="favorite_music", type="integer")
     */
    private $favoriteMusic;

    /**
     * @var int
     *
     * @ORM\Column(name="preferred_adv", type="integer")
     */
    private $preferredAdv;

    /**
     * @var int
     *
     * @ORM\Column(name="favorite_quote", type="integer")
     */
    private $favoriteQuote;

    /**
     * @var int
     *
     * @ORM\Column(name="favorite_animal", type="integer")
     */
    private $favoriteAnimal;

    /**
     * @var int
     *
     * @ORM\Column(name="favorite_color", type="integer")
     */
    private $favoriteColor;


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
     * Set refUserId
     *
     * @param integer $refUserId
     *
     * @return WhatLike
     */
    public function setRefUserId($refUserId)
    {
        $this->refUserId = $refUserId;

        return $this;
    }

    /**
     * Get refUserId
     *
     * @return int
     */
    public function getRefUserId()
    {
        return $this->refUserId;
    }

    /**
     * Set favoriteFilm
     *
     * @param integer $favoriteFilm
     *
     * @return WhatLike
     */
    public function setFavoriteFilm($favoriteFilm)
    {
        $this->favoriteFilm = $favoriteFilm;

        return $this;
    }

    /**
     * Get favoriteFilm
     *
     * @return int
     */
    public function getFavoriteFilm()
    {
        return $this->favoriteFilm;
    }

    /**
     * Set favoriteMusic
     *
     * @param integer $favoriteMusic
     *
     * @return WhatLike
     */
    public function setFavoriteMusic($favoriteMusic)
    {
        $this->favoriteMusic = $favoriteMusic;

        return $this;
    }

    /**
     * Get favoriteMusic
     *
     * @return int
     */
    public function getFavoriteMusic()
    {
        return $this->favoriteMusic;
    }

    /**
     * Set preferredAdv
     *
     * @param integer $preferredAdv
     *
     * @return WhatLike
     */
    public function setPreferredAdv($preferredAdv)
    {
        $this->preferredAdv = $preferredAdv;

        return $this;
    }

    /**
     * Get preferredAdv
     *
     * @return int
     */
    public function getPreferredAdv()
    {
        return $this->preferredAdv;
    }

    /**
     * Set favoriteQuote
     *
     * @param integer $favoriteQuote
     *
     * @return WhatLike
     */
    public function setFavoriteQuote($favoriteQuote)
    {
        $this->favoriteQuote = $favoriteQuote;

        return $this;
    }

    /**
     * Get favoriteQuote
     *
     * @return int
     */
    public function getFavoriteQuote()
    {
        return $this->favoriteQuote;
    }

    /**
     * Set favoriteAnimal
     *
     * @param integer $favoriteAnimal
     *
     * @return WhatLike
     */
    public function setFavoriteAnimal($favoriteAnimal)
    {
        $this->favoriteAnimal = $favoriteAnimal;

        return $this;
    }

    /**
     * Get favoriteAnimal
     *
     * @return int
     */
    public function getFavoriteAnimal()
    {
        return $this->favoriteAnimal;
    }

    /**
     * Set favoriteColor
     *
     * @param integer $favoriteColor
     *
     * @return WhatLike
     */
    public function setFavoriteColor($favoriteColor)
    {
        $this->favoriteColor = $favoriteColor;

        return $this;
    }

    /**
     * Get favoriteColor
     *
     * @return int
     */
    public function getFavoriteColor()
    {
        return $this->favoriteColor;
    }
}

