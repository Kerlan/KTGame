<?php
declare(strict_types=1);

class Productor {
        private const COEF = 1.5;
        private int $lvlMax;
        private int $goldPrice;
        private int $metalPrice;
        private int $diamondPrice;
        private int $lvl;
        private int $quantity;
        private int $lastRefresh;
        private int $duration;
        private int $quantityMax;
        private int $buildingTime;
        private int $stock = 0;

        public function __construct()
        {
            $this->lastRefresh = time();
        }
        
        public function update() {
            $tmp = Int(time() - $this->lastRefresh / $this->duration);
            if ($tmp >= 1)
            {
                $this->stock += $this->quantity * $tmp;
                if ($this->stock > $this->quantityMax)
                {
                    $this->stock = $this->quantityMax;
                }
                $this->lastRefresh = time();
            }
        }

        public function setLvlMax(int $lvlMax)
        {
            $this->lvlMax = $lvlMax;
        }

        public function getLvlMax(): int
        {
            return $this->lvlMax;
        }

        public function setGoldPrice(int $goldPrice)
        {
            $this->goldPrice = $goldPrice;
        }

        public function getGoldPrice(): int
        {
            return $this->goldPrice;
        }

        public function setMetalPrice(int $metalPrice)
        {
            $this->metalPrice = $metalPrice;
        }

        public function getMetalPrice(): int
        {
            return $this->metalPrice;
        }

        public function setDiamondPrice(int $diamondPrice)
        {
            $this->diamondPrice = $diamondPrice;
        }

        public function getDiamondPrice(): int
        {
            return $this->diamondPrice;
        }

        public function setLvl(int $lvl)
        {
            $this->lvl = $lvl;
        }

        public function getLvl(): int
        {
            return $this->lvl;
        }

        public function setQuantity(int $quantity)
        {
            $this->quantity = $quantity;
        }

        public function getQuantity(): int
        {
            return $this->quantity;
        }

        public function setLastRefresh(int $lastRefresh)
        {
            $this->lastRefresh = $lastRefresh;
        }

        public function getLastRefresh(): int
        {
            return $this->lastRefresh;
        }

        public function setDuration(int $duration)
        {
            $this->duration = $duration;
        }

        public function getDuration(): int
        {
            return $this->duration;
        }

        public function setQuantityMax(int $quantityMax)
        {
            $this->quantityMax = $quantityMax;
        }

        public function getQuantityMax(): int
        {
            return $this->quantityMax;
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