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
use Doctrine\ORM\EntityManagerInterface;
use App\Entity;


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

    private $bddShipBase;
    private $bddUnityBase;

    private $bddGoldBuildings;
    private $bddMetalBuildings;
    private $bddDiamondBuildings;
    private $user;


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
            $this->goldStock += $this->goldBuildings[$i]->getStock();
        }
        return $this->goldStock;
    }

    public function calcStockMetal()
    {
        $this->metalStock = 0;

        for ($i = 0;  empty($this->metalBuildings) == false && $i != count($this->metalBuildings); $i++) {
            $this->metalStock += $this->metalBuildings[$i]->getStock();
        }
        return $this->metalStock;
    }

    public function calcStockDiamond()
    {
        $this->diamondStock = 0;

        for ($i = 0;  empty($this->diamondBuildings) == false && $i != count($this->diamondBuildings); $i++) {
            $this->diamondStock += $this->diamondBuildings[$i]->getStock();
        }
        return $this->diamondStock;
    }


    public function calcStockUnity()
    {
        $this->unityStock = 0;

        for ($i = 0;  empty($this->unityBase) == false && $i != count($this->unityBase); $i++) {
            $this->unityStock += $this->unityBase[$i]->getStock();
        }
        return $this->unityStock;
    }

    public function calcStockShip()
    {
        $this->shipStock = 0;

        for ($i = 0;  empty($this->shipBase) == false && $i != count($this->shipBase); $i++) {
            $this->shipStock += $this->shipBase[$i]->getStock();
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


    private function normalizeData($bddGoldBuildings, $bddMetalBuildings, $bddDiamondBuildings, $bddShipBase, $bbdUnityBase)
    {
        for ($i = 0; empty($bddDiamondBuildings) == false && $i != count($bddDiamondBuildings); $i++) {
           array_push($this->diamondBuildings, new Diamond($bddDiamondBuildings[$i]->getLevel(),$bddDiamondBuildings[$i]->getTimestamp()));
           $this->diamondBuildings[$i]->setStock($bddDiamondBuildings[$i]->getQuantity());
           $this->diamondBuildings[$i]->setLastRefresh($$bddDiamondBuildings[$i]->getTimestamp());
        }

        for ($i = 0; empty($bddGoldBuildings) == false && $i != count($bddGoldBuildings); $i++) {
                
            array_push($this->goldBuildings, new Gold($bddGoldBuildings[$i]->getLevel(),$bddGoldBuildings[$i]->getTimestamp()));

            $this->goldBuildings[$i]->setStock($bddGoldBuildings[$i]->getQuantity());
                
            $this->goldBuildings[$i]->setLastRefresh($bddGoldBuildings[$i]->getTimestamp());
            if ($this->goldBuildings[$i]->getRestTime() <= 0)
              $this->goldBuildings[$i]->update();
         }

         for ($i = 0; empty($bddMetalBuildings) == false && $i != count($bddMetalBuildings); $i++) {
            array_push($this->metalBuildings, new Metal($bddMetalBuildings[$i]->getLevel(), $bddMetalBuildings[$i]->getTimestamp()));
            $this->metalBuildings[$i]->setStock($bddMetalBuildings[$i]->getQuantity());
            $this->metalBuildings[$i]->setLastRefresh($bddMetalBuildings[$i]->getTimestamp());
         }

         for ($i = 0; empty($bddShipBase) == false && $i != count($bddShipBase); $i++) {
            array_push($this->shipBase, new Ship($bddShipBase[$i]->getLevel()));
            $this->shipBase[$i]->setStock($bddShipBase[$i]->getQuantity());
            $this->shipBase[$i]->setLastRefresh($bddShipBase[$i]->getTimestamp());
         }

         for ($i = 0; empty($bddUnityBase) == false && $i != count($bddUnityBase); $i++) {
            array_push($this->unityBase, new Diamond($bddUnityBase[$i]->getLevel()));
            $this->unityBase[$i]->setStock($bddUnityBase[$i]->getQuantity());
            $this->unityBase[$i]->setLastRefresh($bddUnityBase[$i]->getTimestamp());
         }
    }


    //private function addMine
    

    #[Route('/home/{email}', name: 'home')]
    public function index(UserRepository $repo, $email): Response
    {

        $bddShipBase = new ArrayCollection;
        $bddUnityBase = new ArrayCollection;
    
        $bddGoldBuildings = new ArrayCollection;
        $bddMetalBuildings = new ArrayCollection;
        $bddDiamondBuildings = new ArrayCollection;

        

        $this->user = $repo->findOneByName($email);
        //$this->takeFixData();

        $bddShipBase = $this->user->getShips();
        $bbdUnityBase = $this->user->getSoldiers();
        $bbdEnnemies = $repo->findAll();
        //var_dump($bbdEnnemies);
        if (count($bbdEnnemies) != 0) {
        
        foreach ($bbdEnnemies as $temp) {
            array_push($this->ennemies, $temp->getName());
        }
    }
       // for (int $i = 0; i != count($bbdEnnemies); )
        $bbdGoldBuildings = $this->user->getGolds();
        $bbdMetalBuildings = $this->user->getMetals();
        $bbdDiamondBuildings = $this->user->getDiamonds();

        $this->normalizeData($bbdGoldBuildings, $bbdMetalBuildings, $bbdDiamondBuildings, $bddShipBase, $bbdUnityBase);


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
            'shipStock' => $this->shipStock,
            'unityStock' => $this->unityStock,
            
            'shipBase' => $this->shipBase,
            'unityBase' => $this->unityBase,
            'ennemies' => $this->ennemies,
            'goldBuildings' => $this->goldBuildings,
            'metalBuildings' => $this->metalBuildings,
            'diamondBuildings' => $this->diamondBuildings,
            'email' => $email,
        ]);
    }

    #[Route('home/invade/{myEmail}/{yourEmail}', name: 'invade_ennemy')]
    public function invadeEnnemy($myEmail, $yourEmail, EntityManagerInterface $manager, UserRepository $repo): Response
    {
        var_dump("lol");

        $youruser = $repo->findOneByName($yourEmail);
        $myattackShip = $this->calcStockShip();
        $myattackSoldier = $this->calcStockUnity();
        
        $shipBase = [];
        $unityBase = [];
        $bddShipBase = new ArrayCollection;
        $bddUnityBase = new ArrayCollection;
        
        $bddShipBase = $youruser->getShips();
        $bddShipBase = $youruser->getSoldiers();
         for ($i = 0; empty($bddShipBase) == false && $i != count($bddShipBase); $i++) {
            array_push($shipBase, new Ship($bddShipBase[$i]->getLevel()));
            $shipBase[$i]->setStock($bddShipBase[$i]->getQuantity());
            $shipBase[$i]->setLastRefresh($bddShipBase[$i]->getTimestamp());
         }


         for ($i = 0; empty($bddUnityBase) == false && $i != count($bddUnityBase); $i++) {
            array_push($unityBase, new Diamond($bddUnityBase[$i]->getLevel()));
            $unityBase[$i]->setStock($bddUnityBase[$i]->getQuantity());
            $unityBase[$i]->setLastRefresh($bddUnityBase[$i]->getTimestamp());
         }

        $yourattackShip = 0;
        for ($i = 0;  empty($shipBase) == false && $i != count($shipBase); $i++) {
            $yourattackShip += $shipBase[$i]->getQuantity();
        }

        $yourattackUnity = 0;
        for ($i = 0;  empty($unityBase) == false && $i != count($unityBase); $i++) {
            $yourattackUnity += $unityBase[$i]->getQuantity();
        }
        
        if ($this->calcStockUnity() + $this->calcStockShip() > $yourattackShip + $yourattackUnity) {
            $bddGold = new ArrayCollection;
            $bddGold = $youruser->getGolds();

            $yourGold = [];
            $goldStock = [];

           // $gold = new Entity\Gold();


           for ($i = 0; empty($bddGold) == false && $i != count($bddGold); $i++) {
                
                array_push($yourGold, new Gold($bddGold[$i]->getLevel(),$bddGold[$i]->getTimestamp()));

                $yourGold[$i]->setStock($bddGold[$i]->getQuantity());
                    
                $yourGold[$i]->setLastRefresh($bddGold[$i]->getTimestamp());
                if ($yourGold[$i]->getRestTime() <= 0)
                $yourGold[$i]->update();
             }
           

            for ($i = 0;  empty($this->goldBuildings) == false && $i != count($this->goldBuildings) && empty($yourGold) == false && $i != count($yourGold); $i++) {
                $yourGold[$i]->setQuantity($yourGold[$i]->getQuantity() / 2);
                $this->goldBuildings[$i]->setQuantity($yourGold[$i]->getQuantity() / 2 + $this->goldBuildings[$i]->getQuantity());
                $yourGold[$i]->setQuantity($yourGold[$i]->getQuantity() / 2);
                $yourGold[$i]->setUser($youruser);
                $this->goldBuildings[$i]->setUser($this->user);
                $manager->persist($yourGold[$i], $this->goldBuildings[$i]);

            }


            //$this->stock;
        }

        else if($this->calcStockUnity() + $this->calcStockShip() < $yourattackShip + $yourattackUnity) {

            $bddGold = new ArrayCollection;
            $bddGold = $youruser->getGolds();

            $yourGold = [];
            $goldStock = [];

           // $gold = new Entity\Gold();


           for ($i = 0; empty($bddGold) == false && $i != count($bddGold); $i++) {
                
                array_push($yourGold, new Gold($bddGold[$i]->getLevel(),$bddGold[$i]->getTimestamp()));

                $yourGold[$i]->setStock($bddGold[$i]->getQuantity());
                    
                $yourGold[$i]->setLastRefresh($bddGold[$i]->getTimestamp());
                if ($yourGold[$i]->getRestTime() <= 0)
                  $yourGold[$i]->update();
             }
           

            for ($i = 0;  empty($yourGold) == false && $i != count($yourGold) && empty($this->goldBuildings[$i]) == false && $i != count($this->goldBuildings[$i]); $i++) {
                $this->goldBuildings[$i]->setQuantity($this->goldBuildings[$i]->getQuantity() / 2);
                $yourGold[$i]->setQuantity($this->goldBuildings[$i]->getQuantity() / 2 + $yourGold[$i]->getQuantity());
                $this->goldBuildings[$i]->setQuantity($this->goldBuildings[$i]->getQuantity() / 2);
                $this->goldBuildings[$i]->setUser($youruser);
                $yourGold[$i]->setUser($this->user);
                $manager->persist($yourGold[$i], $this->goldBuildings[$i]);
            }


            //$this->stock;
        }
        $manager->flush();
        return $this->redirectToRoute('home', [
            'email' => $myEmail
        ]);
    } 

    #[Route('home/create/{type}/{email}', name: 'create_generator')]
    public function createGenerator($type, $email, EntityManagerInterface $manager, UserRepository $repo): Response
    {
        $user = $repo->findOneByName($email);

        switch ($type) {
            case 'gold':
                $gold = new Entity\Gold();
                $gold->setQuantity(0);
                $gold->setTimestamp(time());
                $gold->setLevel(1);
                $gold->setUser($user);
                $manager->persist($gold);
                $manager->flush();
                break;
            case 'metal':
                $metal = new Entity\Metal();
                $metal->setQuantity(0);
                $metal->setTimestamp(time());
                $metal->setLevel(1);
                $metal->setUser($user);
                $manager->persist($metal);
                $manager->flush(); 
                break;
            case 'diamond':
                $diamond = new Entity\Diamond();
                $diamond->setQuantity(0);
                $diamond->setTimestamp(time());
                $diamond->setLevel(1);
                $diamond->setUser($user);
                $manager->persist($diamond);
                $manager->flush(); 
                break;
            case 'ship':
                $ship = new Entity\Ship();
                $ship->setQuantity(0);
                $ship->setTimestamp(time());
                $ship->setLevel(1);
                $ship->setUser($user);
                $manager->persist($ship);
                $manager->flush();
                break;
            case 'soldier':
                $soldier = new Entity\Soldier();
                $soldier->setQuantity(0);
                $soldier->setTimestamp(time());
                $soldier->setLevel(1);
                $soldier->setUser($user);
                $manager->persist($soldier);
                $manager->flush();   
                break;
            case 'towerDefense':
                $towerDefense = new Entity\TowerDefense();
                $towerDefense->setQuantity(0);
                $towerDefense->setTimestamp(time());
                $towerDefense->setLevel(1);
                $towerDefense->setUser($user);
                $manager->persist($towerDefense);
                $manager->flush(); 
                break;
                
            default:
                break;
        }
        return $this->redirectToRoute('home', [
            'email' => $email
        ]);
    }
}