<?php

declare(strict_types=1);

Class TowerDefense Extends Attack
{
    public static int $globalQuantity = 0; // Nombre total de tower defense
    private const COEF = 1.5;
    private int $price = 10;
    private int $buildingTime = 120;
    private int $timestamp = 0;
    private bool $isBuilding = false;

    public function __construct(private int $lvl = 1)
    {
        $this->lvl = $lvl;
        $this->price *= $lvl * COEF;
        $this->buildingTime *= $lvl * COEF;
        $this->pv = 1000 * $lvl * COEF;
        $this->dps = 100 * $lvl * COEF;
    }

    public function build()
    {
        $this->isBuilding = true;
        $this->timestamp = time();
    }

    public function check()
    {
        if ($this->isBuilding && time() - $this->timestamp > $this->buildingTime)
        {
            self::$globalQuantity += 1;
            $this->isBuilding = false;
        }
    }

    public function setLvl(int $lvl)
    {
        $this->lvl = $lvl;
    }

    public function getLvl(): int
    {
        return $this->lvl;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setBuildingTime(int $buildingTime)
    {
        $this->buildingTime = $buildingTime;
    }

    public function getBuildingTime(): int
    {
        return $this->buildingTime;
    }
}

?>