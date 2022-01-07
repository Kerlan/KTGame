<?php

declare(strict_types=1);

Class Attack {
	int Pv;
	Int Dps;
}

Class Defense Extends Attack
{
        Float $coefBuildingTime;
        Float $coefUpgradeTime;
        Float $coefPrice;
        int $price;
        int $lvl;
        int $buildingTime;
}


Class Planete 
{
        Array $GoldGenerator;
        Array $MetalGenerator;
        Array $DiamantGenerator;
        Array $unityGenerator;
        Array $shipGenerator;
        Array $defenseTower;
        String $name;
        Array $coordonnées;
}
?>