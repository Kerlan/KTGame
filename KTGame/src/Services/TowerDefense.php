<?php

declare(strict_types=1);

Class TowerDefense Extends Attack
{
    private const COEF = 1.5;
    private int $price;
    private int $lvl;
    private int $buildingTime;

    public function __construct(int $lvl = 1)
    {
        $this->$lvl = $lvl;
        $this->$price = 10 * $lvl * COEF;
        $this->$buildingTime = 120 * $lvl * COEF;
        $this->$pv = 1000 * $lvl * COEF;
        $this->$dps = 100 * $lvl * COEF;
    }

    public function setLvl(int $lvl)
    {
        $this->$lvl = $lvl;
    }

    public function getLvl(): int
    {
        return $this->$lvl;
    }

    public function setPrice(int $price)
    {
        $this->$price = $price;
    }

    public function getPrice(): int
    {
        return $this->$price;
    }

    public function setBuildingTime(int $buildingTime)
    {
        $this->$buildingTime = $buildingTime;
    }

    public function getBuildingTime(): int
    {
        return $this->$buildingTime;
    }
}

?>