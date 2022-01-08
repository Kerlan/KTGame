<?php
declare(strict_types=1);

class Gold extends Productor {
    static public $globalQuantity = 0;

    public function __construct(int $lvl)
    {
        $this->lvlMax = 10;
        $this->goldPrice = 0;
        $this->metalPrice = 100 * $this->COEF * $lvl;
        $this->diamondPrice = 10 * $this->COEF * $lvl;
        $this->lvl = $lvl;
        $this->quantity = 5 * $this->COEF * $lvl;
        $this->lastRefresh;
        $this->duration = 15;
        $this->quantityMax = 10000 * $this->COEF * $lvl;
        $this->buildingTime = 360 * $this->COEF * $lvl;
        $this->stock = 0;
    }
}