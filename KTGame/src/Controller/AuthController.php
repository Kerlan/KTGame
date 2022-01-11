<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class AuthController extends AbstractController
{
    #[Route('/auth', name: 'auth')]
    public function index(Request $request, UserRepository $repo): Response
    {
        if ($request->request->count() > 0) {
            $user = $repo->findOneByName($request->request->get('name'));
            if ($user->getPassword() == $request->request->get('password')) {
                return $this->redirectToRoute('home',[
                    'email' => $user->getName(),
                ]);
            } else {
                return $this->render('auth/index.html.twig', [
                    'controller_name' => 'AuthController',
                ]);
            }
        } else {
            return $this->render('auth/index.html.twig', [
                'controller_name' => 'AuthController',
            ]);
        }
    }
}