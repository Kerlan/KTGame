<?php
declare(strict_types=1);

class Diamond extends Productor {
    static public $globalQuantity = 0;

    public function __construct(int $lvl)
    {
        $this->$lvlMax = 10;
        $this->$goldPrice = 100 * $this->COEF * $lvl;
        $this->$metalPrice = 100 * $this->COEF * $lvl;
        $this->$diamondPrice = 0;
        $this->$lvl = $lvl;
        $this->$quantity = 5 * $this->COEF * $lvl;
        $this->$lastRefresh;
        $this->$duration = 15;
        $this->$quantityMax = 10000 * $this->COEF * $lvl;
        $this->$buildingTime = 360 * $this->COEF * $lvl;
        $this->$stock = 0;
    }
}