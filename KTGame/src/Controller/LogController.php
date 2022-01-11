<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class LogController extends AbstractController
{
    #[Route('/log', name: 'log')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        if ($request->request->count() > 0) {
            $user = new User();
            $user->setName($request->request->get('name'))
                 ->setPassword($request->request->get('password'));
            $manager->persist($user);
            $manager->flush();
        }
        return $this->render('log/index.html.twig', [
            'controller_name' => 'LogController',
        ]);
    }
}