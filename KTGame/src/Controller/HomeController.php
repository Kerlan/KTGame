<?php
declare(strict_types=1);

namespace App\Controller;

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

    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $this->takeFixData();
        $this->takeEnnemies();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'goldStock' => $this->goldStock,
            'metalStock' => $this->metalStock,
            'diamondStock' => $this->diamondStock,
            'shipStock' => $this->shipStock,
            'unityStock' => $this->unityStock,
            'ennemies' => $this->ennemies,
        ]);
    }
}