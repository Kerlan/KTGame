<?php
declare(strict_types=1);

namespace App\Services;

class Diamond extends Productor {
    static public $globalQuantity = 0;
    private const COEF = 1.5;

    public function __construct(int $lvl)
    {
        $this->COEF = 1.3;

        $this->lvlMax = 10;
        $this->goldPrice = 100 * $this->COEF * $lvl;
        $this->metalPrice = 100 * $this->COEF * $lvl;
        $this->diamondPrice = 0;
        $this->lvl = $lvl;
        $this->quantity = 5 * $this->COEF * $lvl;
        $this->lastRefresh = 6;
        $this->duration = 15;
        $this->quantityMax = 10000 * $this->COEF * $lvl;
        $this->buildingTime = 360 * $this->COEF * $lvl;
        $this->stock = 0;
        $isBuilding = false;
    }
}