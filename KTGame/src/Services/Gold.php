<?php
declare(strict_types=1);

namespace App\Services;

class Gold extends Productor {

    private const COEF = 1.5;

    static public $globalQuantity = 0;
    public function __construct(int $lvl)
    {
        $this->COEF = 1.3;
        $this->lvlMax = 10;
        $this->goldPrice = 0;
        $this->metalPrice = 100 * $this->COEF * $lvl;
        $this->diamondPrice = 10 * $this->COEF * $lvl;
        $this->lvl = $lvl;
        $this->quantity = 5 * $this->COEF * $lvl;
        $this->lastRefresh = 9;
        $this->duration = 15;
        $this->ifBuild = false;
        $isBuilding = false;
        $this->quantityMax = 10000 * $this->COEF * $lvl;
        $this->buildingTime = 360 * $this->COEF * $lvl;
        $this->stock = 0;
    }
}