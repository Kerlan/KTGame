<?php
declare(strict_types=1);

namespace App\Services;

class Diamond extends Productor {
    static public $globalQuantity = 0;
    private const COEF = 1.5;

    public function __construct(int $lvl, int $timestamp)
    {
        $this->COEF = 1.3;
        $this->lvlMax = 10;
        $this->goldPrice = 0;
        $this->metalPrice = 100 * $this->COEF * $lvl;
        $this->diamondPrice = 10 * $this->COEF * $lvl;
        $this->lvl = $lvl;
        $this->quantity = 5 * $this->COEF * $lvl;
        $this->lastRefresh = $timestamp;
        $this->duration = 20 * 1.3;
        $this->ifBuild = false;
        $this->isBuilding = false;
        $this->quantityMax = 10000 * $this->COEF * $lvl;
        $this->buildingTime = 360 * $this->COEF * $lvl;
        $this->stock = 0;
    }

    
    public function getRestTime()
    {
        return $this->duration - (time() - $this->lastRefresh);
    }
}