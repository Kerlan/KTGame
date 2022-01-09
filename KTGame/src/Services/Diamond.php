<?php
declare(strict_types=1);

class Diamond extends Productor {
    static public $globalQuantity = 0;
    private const COEF = 1.5;

    public function __construct(int $lvl)
    {

        $this->lvlMax = 10;
        $this->goldPrice = 100 * $this->$coef * $lvl;
        $this->metalPrice = 100 * $this->$coef * $lvl;
        $this->diamondPrice = 0;
        $this->lvl = $lvl;
        $this->quantity = 5 * $this->$coef * $lvl;
        $this->lastRefresh;
        $this->duration = 15;
        $this->quantityMax = 10000 * $this->$coef * $lvl;
        $this->buildingTime = 360 * $this->$coef * $lvl;
        $this->stock = 0;
    }
}