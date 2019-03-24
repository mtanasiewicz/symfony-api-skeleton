<?php


namespace App\UseCase\User\Http;


use App\Shared\Http\ApiControllerBase;
use App\UseCase\User\Domain\Model\UserDto;
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
        return new UserDto('email@example.com', 'Janusz Twardy');
    }
}