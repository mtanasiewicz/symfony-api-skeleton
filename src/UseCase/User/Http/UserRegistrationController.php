<?php


namespace App\UseCase\User\Http;


use App\Shared\Http\ApiControllerBase;
use App\UseCase\User\Domain\Model\User;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * @Route(path="/api")
 */
class UserRegistrationController extends ApiControllerBase
{
    /**
     * @Route(path="/register")
     */
    public function registerUserAction()
    {
        return new User('email@example.com', 'Janusz Twardy');
    }
}