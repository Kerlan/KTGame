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
use App\Repository\UserRepository;

class HomeController extends AbstractController
{

    public int $goldStock;
    public int $metalStock;
    public int $diamondStock;


    public int $shipBase;
    public int $unityBase;
    public int $nbsoldier;
    public int $nbship;



    public int $bddShipBase;
    public int $bddUnityBase;

    private array $ennemies;
    private array $goldBuildings;
    private array $metalBuildings;
    private array $diamondBuildings;


    private array $bddGoldBuildings;
    private array $bddMetalBuildings;
    private array $bddDiamondBuildings;
    private $user;

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
            $this->goldStock += $goldBuildings[$i]->quantity;
        }
        return $this->goldStock;
    }

    public function calcStockMetal()
    {
        $metalStock = 0;

        for ($i = 0; $i != count($metalBuildings); $i++) {
            $this->metalStock += $metalBuildings[$i]->quantity;
        }
        return $this->metalStock;
    }

    public function calcStockDiamond()
    {
        $this->diamondStock = 0;

        for ($i = 0; $i != count($diamondBuildings); $i++) {
            $this->diamondStock += $diamondBuildings[$i]->quantity;
        }
        return $this->diamondStock;
    }


    public function calcStockUnity()
    {
        $this->unityStock = 0;

        for ($i = 0; $i != count($unityStock); $i++) {
            $this->unityStock += $unityBase[$i]->quantity;
        }
        return $this->unityStock;
    }

    public function calcStockShip()
    {
        $this->unityStock = 0;

        for ($i = 0; $i != count($unityStock); $i++) {
            $this->unityStock += $unityBase[$i]->quantity;
        }
        return $this->unityStock;
    }

    public function addBuildings(int $which)
    {
        if ($which == 0);
            $user->addGold();
        if ($which == 1);
            $user->addMetal();
        if ($which == 2);
            $user->addDiamond();
        if ($which == 3);
            $user->addShip();
        if ($which == 4);
            $user->addSoldier();
    }


    private function normalizeData()
    {
        for ($i = 0; $i != count($bddDiamondBuildings); $i++) {
           array_push($diamondBuildings, new Diamond($bddDiamondBuildings[$i]->lvl));
           $diamondBuildings[$i]->setStock($bddDiamondBuildings[$i]->quantity);
           $diamondBuildings[$i]->setLastRefresh($bddDiamondBuildings[$i]->lastRefresh);
        }

        for ($i = 0; $i != count($bddGoldBuildings); $i++) {
            array_push($goldBuildings, new Diamond($bddGoldBuildings[$i]->lvl));
            $goldBuildings[$i]->setStock($bddGoldBuildings[$i]->quantity);
            $goldBuildings[$i]->setLastRefresh($bddGoldBuildings[$i]->lastRefresh);
         }

         for ($i = 0; $i != count($bddMetalBuildings); $i++) {
            array_push($metalBuildings, new Diamond($bddMetalBuildings[$i]->lvl));
            $metalBuildings[$i]->setStock($bddMetalBuildings[$i]->quantity);
            $metalBuildings[$i]->setLastRefresh($bddMetalBuildings[$i]->lastRefresh);
         }

         for ($i = 0; $i != count($bddShipBase); $i++) {
            array_push($shipBase, new Ship($bddShipBase[$i]->lvl));
            $shipBase[$i]->setStock($bddShipBase[$i]->quantity);
            $shipBase[$i]->setLastRefresh($bddShipBase[$i]->lastRefresh);
         }

         for ($i = 0; $i != count($bddUnityBase); $i++) {
            array_push($unityBase, new Diamond($bddUnityBase[$i]->lvl));
            $unityBase[$i]->setStock($bddUnityBase[$i]->quantity);
            $unityBase[$i]->setLastRefresh($bddUnityBase[$i]->lastRefresh);
         }
    }


    #[Route('/home/{email}', name: 'home')]
    public function index(UserRepository $repo, $email): Response
    {
        $user = $repo->findByName($email);
        //$this->takeFixData();


        $bddShipBase = $user->getShips();
        $bbdUnityBase = $user->getSoldiers();
        $bbdEnnemies = $user->takeEnnemies(); //!!!!!!!!!!!!
        $bbdGoldBuildings = $user->getGolds();
        $bbdMetalBuildings = $user->getMetals();
        $bbdDiamondBuildings = $user->getDiamonds();

        normalizeData();


        $this->calcStockGold();
        $this->calcStockMetal();
        $this->calcStockDiamond();
        $this->calcStockShip();
        $this->calcStockUnity();


       // $this->takeGoldBuildings();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'goldStock' => $this->goldStock,
            'metalStock' => $this->metalStock,
            'diamondStock' => $this->diamondStock,
            'shipBase' => $this->shipStock,
            'unityBase' => $this->unityBase,
            'ennemies' => $this->ennemies,
            'goldBuildings' => $this->goldBuildings,
            'metalBuildings' => $this->metalBuildings,
            'diamondBuildings' => $this->diamondBuildings,
        ]);
    }
}