<?php
declare(strict_types=1);

namespace App\Services;

Class Attack {
    public int $pv;
    public Int $dps;

    public function setPv(int $pv)
    {
        $this->$pv = $pv;
    }

    public function getPv(): int
    {
        return $this->$pv;
    }

    public function setDps(int $dps)
    {
        $this->$dps = $dps;
    }

    public function getDps(): int
    {
        return $this->$dps;
    }
}
?>