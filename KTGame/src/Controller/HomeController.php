<?php
declare(strict_types=1);

namespace App\Controller;
use App\Services\Gold;
use App\Services\Diamond;
use App\Services\Metal;

// use App\Entity\Metal;
// use App\Entity\Diamond;
// use App\Entity\Gold;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{

    public int $goldStock;
    public int $metalStock;
    public int $diamondStock;


    public array $shipBase = [];
    public array $unityBase = [];
    public int $nbsoldier;
    public int $nbship;




    private array $ennemies = [];
    private array $goldBuildings = [];
    private array $metalBuildings = [];
    private array $diamondBuildings = [];

    public $bddShipBase;
    public $bddUnityBase;

    private $bddGoldBuildings;
    private $bddMetalBuildings;
    private $bddDiamondBuildings;
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

        for ($i = 0; empty($this->goldBuildings) == false && $i != count($this->goldBuildings); $i++) {
            $this->goldStock += $goldBuildings[$i]->quantity;
        }
        return $this->goldStock;
    }

    public function calcStockMetal()
    {
        $this->metalStock = 0;

        for ($i = 0;  empty($this->metalBuildings) == false && $i != count($this->metalBuildings); $i++) {
            $this->metalStock += $this->metalBuildings[$i]->quantity;
        }
        return $this->metalStock;
    }

    public function calcStockDiamond()
    {
        $this->diamondStock = 0;

        for ($i = 0;  empty($this->diamondBuildings) == false && $i != count($this->diamondBuildings); $i++) {
            $this->diamondStock += $this->diamondBuildings[$i]->quantity;
        }
        return $this->diamondStock;
    }


    public function calcStockUnity()
    {
        $this->unityStock = 0;

        for ($i = 0;  empty($this->unityBase) == false && $i != count($this->unityBase); $i++) {
            $this->unityStock += $this->unityBase[$i]->quantity;
        }
        return $this->unityStock;
    }

    public function calcStockShip()
    {
        $this->shipStock = 0;

        for ($i = 0;  empty($this->shipBase) == false && $i != count($this->shipBase); $i++) {
            $this->shipStock += $this->shipBase[$i]->quantity;
        }
        return $this->shipStock;
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
        for ($i = 0; empty($this->bddDiamondBuildings) == false && $i != count($this->bddDiamondBuildings); $i++) {
           array_push($diamondBuildings, new Diamond($this->bddDiamondBuildings[$i]->lvl));
           $diamondBuildings[$i]->setStock($$this->bddDiamondBuildings[$i]->quantity);
           $diamondBuildings[$i]->setLastRefresh($$this->bddDiamondBuildings[$i]->lastRefresh);
        }

        for ($i = 0; empty($this->bddGoldBuildings) == false && $i != count($this->bddGoldBuildings); $i++) {
            array_push($goldBuildings, new Diamond($this->bddGoldBuildings[$i]->lvl));
            $goldBuildings[$i]->setStock($this->bddGoldBuildings[$i]->quantity);
            $goldBuildings[$i]->setLastRefresh($this->bddGoldBuildings[$i]->lastRefresh);
         }

         for ($i = 0; empty($this->bddMetalBuildings) == false && $i != count($this->bddMetalBuildings); $i++) {
            array_push($metalBuildings, new Diamond($this->bddMetalBuildings[$i]->lvl));
            $metalBuildings[$i]->setStock($this->bddMetalBuildings[$i]->quantity);
            $metalBuildings[$i]->setLastRefresh($this->bddMetalBuildings[$i]->lastRefresh);
         }

         for ($i = 0; empty($this->bddShipBase) == false && $i != count($this->bddShipBase); $i++) {
            array_push($shipBase, new Ship($this->bddShipBase[$i]->lvl));
            $shipBase[$i]->setStock($this->bddShipBase[$i]->quantity);
            $shipBase[$i]->setLastRefresh($this->bddShipBase[$i]->lastRefresh);
         }

         for ($i = 0; empty($this->bddUnityBase) == false && $i != count($this->bddUnityBase); $i++) {
            array_push($unityBase, new Diamond($this->bddUnityBase[$i]->lvl));
            $unityBase[$i]->setStock($this->bddUnityBase[$i]->quantity);
            $unityBase[$i]->setLastRefresh($this->bddUnityBase[$i]->lastRefresh);
         }
    }


    #[Route('/home/{email}', name: 'home')]
    public function index(UserRepository $repo, $email): Response
    {

        $bddShipBase = new ArrayCollection;
        $bddUnityBase = new ArrayCollection;
    
        $bddGoldBuildings = new ArrayCollection;
        $bddMetalBuildings = new ArrayCollection;
        $bddDiamondBuildings = new ArrayCollection;

        

        $user = $repo->findOneByName($email);
        //$this->takeFixData();


        $bddShipBase = $user->getShips();
        $bbdUnityBase = $user->getSoldiers();
        $bbdEnnemies =  array (
            "ROCKEFELLER",
            "KLN",
            "Julien.pich",
            "lasalope",
        ); //!!!!!!!!!!!!
        $bbdGoldBuildings = $user->getGolds();
        $bbdMetalBuildings = $user->getMetals();
        $bbdDiamondBuildings = $user->getDiamonds();

        $this->normalizeData();


        $this->calcStockGold();
        $this->calcStockMetal();
        $this->calcStockDiamond();
        $this->calcStockShip();
        $this->calcStockUnity();

        $this->ennemies = array (
            "ROCKEFELLER",
            "KLN",
            "Julien.pich",
            "lasalope",
        );

       // $this->takeGoldBuildings();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'goldStock' => $this->goldStock,
            'metalStock' => $this->metalStock,
            'diamondStock' => $this->diamondStock,
            'shipStock' => $this->shipStock,
            'unityStock' => $this->unityStock,
            
            'shipBase' => $this->shipBase,
            'unityBase' => $this->unityBase,
            'ennemies' => $this->ennemies,
            'goldBuildings' => $this->goldBuildings,
            'metalBuildings' => $this->metalBuildings,
            'diamondBuildings' => $this->diamondBuildings,
        ]);
    }
}