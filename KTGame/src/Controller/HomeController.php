<?php
declare(strict_types=1);

namespace App\Controller;
use App\Services\Gold;
use App\Services\Diamond;
use App\Services\Metal;

// use App\Entity\Metal;
// use App\Entity\Diamond;
// use App\Entity\Gold;


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
        $this->goldStock;
        $this->metalStock = 7;
        $this->diamondStock = 2;
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

    // public function findSomethingByUser(User $user)
    // {
    //     $query = $this->getEntityManager()
    //         ->createQuery(
    //             'SELECT t FROM AppBundle:Table t '.
    //             'WHERE t.user > :user'
    //     )->setParameter('user', $user->getUsername());

    //     return $query->getResult();
    // }

    public function calcStockGold()
    {
        $this->goldStock = 0;

        for ($i = 0; $i != count($goldBuildings); $i++) {
            $this->goldStock += $goldBuildings[i]->stock;
        }
        return $this->goldStock;
    }

    public function calcStockMetal()
    {
        $metalStock = 0;

        for ($i = 0; $i != count($metalBuildings); $i++) {
            $metalStock += $metalBuildings[i]->stock;
        }
        return $metalStock;
    }

    public function calcStockDiamond()
    {
        $diamondBuildings = 0;

        for ($i = 0; $i != count($diamondBuildings); $i++) {
            $diamondBuildings += $diamondBuildings[i]->stock;
        }
        return $diamondBuildings;
    }

    #[Route('/home', name: 'home')]
    public function index($email): Response
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:')->find($email);
        $this->takeFixData();
        $this->calcStockGold();
        $this->calcStockMetal();
        $this->calcStockDiamond();

        $shipStock = $user->getShips();
        $unityStock = $user->getSoldiers();
        $ennemies = $user->ennemies;
        $goldBuildings = $user->getGolds();
        $metalBuildings = $user->getMetals();
        $diamondBuildings = $user->getDiamonds();

       // $this->takeGoldBuildings();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'goldStock' => $user->goldStock,
            'metalStock' => $user->metalStock,
            'diamondStock' => $user->diamondStock,
            'shipStock' => $shipStock,
            'unityStock' => $unityStock,
            'ennemies' => $user->ennemies,
            'goldBuildings' => $goldBuildings,
            'metalBuildings' => $metalBuildings,
            'diamondBuildings' => $diamondBuildings,

        ]);
    }
}