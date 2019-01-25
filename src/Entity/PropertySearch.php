<?php
/**
 * Created by PhpStorm.
 * User: micpi
 * Date: 23/01/2019
 * Time: 13:50
 */

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch
{
    /**
     * @var int|null
     * @Assert\Range(min="90000", max="1000000")
     */
    private $maxPrice;
    /**
     * @var int|null
     */
    private $minSurface;

    /**
     * @return int|null
     * @Assert\Range(min="20", max="500")
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     */
    public function setMaxPrice(int $maxPrice): void
    {
        $this->maxPrice = $maxPrice;
    }

    /**
     * @return int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param int|null $minSurface
     */
    public function setMinSurface(int $minSurface): void
    {
        $this->minSurface = $minSurface;
    }
}