<?php


namespace App\Controller\UseCase\User;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route(path="/register")
     */
    public function registerUserAction()
    {
        return new Response("HELLO WORLD!");
    }
}