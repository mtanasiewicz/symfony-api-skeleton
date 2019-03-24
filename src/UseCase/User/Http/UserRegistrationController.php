<?php


namespace App\UseCase\User\Http;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserRegistrationController extends AbstractController
{
    /**
     * @Route(path="/register")
     */
    public function registerUserAction()
    {
        return new Response('HELLO!');
    }
}