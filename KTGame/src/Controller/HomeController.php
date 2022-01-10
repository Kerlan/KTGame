<?php
declare(strict_types=1);

namespace App\Controller;
use App\Services\Gold;
use App\Services\Diamond;
use App\Services\Metal;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public int $goldStock;
    public int $metalStock;
    public int $diamondStock;
    public int $shipStock;
    public int $unityStock;
    private array $ennemies;
    private array $goldBuildings;
    private array $metalBuildings;
    private array $diamondBuildings;

    public function takeFixData()
    {
        $this->goldStock = 14;
        $this->metalStock = 7;
        $this->diamondStock = 2;
        $this->shipStock = 21;
        $this->unityStock = 34;
    }


    public function takeEnnemies()
    {
        $this->ennemies = array (
            "ROCKEFELLER",
            "KLN",
            "Julien.pich",
            "lasalope",
        );
    }

    public function takeGoldBuildings()
    {
        $this->goldBuildings = array (
            new Gold(1),
            new Gold(3),
            new Gold(2),
        );
    }

    public function takeMetalBuildings()
    {
        $this->metalBuildings = array (
            new Metal(1),
            new Metal(3),
            new Metal(2),
        );
    }

    public function takeDiamondBuildings()
    {
        $this->diamondBuildings = array (
            new Diamond(1),
            new Diamond(3),
            new Diamond(2),
        );
    }


    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $this->takeFixData();
        $this->takeEnnemies();
        $this->takeGoldBuildings();
        $this->takeMetalBuildings();
        $this->takeDiamondBuildings();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'goldStock' => $this->goldStock,
            'metalStock' => $this->metalStock,
            'diamondStock' => $this->diamondStock,
            'shipStock' => $this->shipStock,
            'unityStock' => $this->unityStock,
            'ennemies' => $this->ennemies,
            'goldBuildings' => $this->goldBuildings,
            'metalBuildings' => $this->metalBuildings,
            'diamondBuildings' => $this->diamondBuildings,

        ]);
    }
}