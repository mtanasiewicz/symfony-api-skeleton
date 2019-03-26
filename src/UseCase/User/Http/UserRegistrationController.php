<?php


namespace App\UseCase\User\Http;


use App\Shared\Http\ApiControllerBase;
use App\Shared\Model\Entity\Address;
use App\Shared\Model\Entity\RefreshToken;
use App\Shared\Model\Entity\User;
use App\Shared\Model\Entity\Wallet;
use Doctrine\ORM\EntityManagerInterface;
use Faker\Factory;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * @Route(path="/api")
 */
class UserRegistrationController extends ApiControllerBase
{
    /**
     * @Route(path="/register")
     */
    public function registerUserAction(EntityManagerInterface $entityManager)
    {
        $faker = Factory::create('en');

        for ($i=0; $i<1000; $i++) {
            $user = new User(
                $faker->email,
                $faker->password
            );

            $refreshToken = new RefreshToken();
            $refreshToken->setRefreshToken();

            $wallet = new Wallet();
            $wallet->setToken(uniqid());
            $wallet->setUser($user);

            $address = new Address();
            $address->setFlat($faker->numberBetween(1,1000));
            $address->setStreet($faker->streetName);
            $address->setStreetNumber($faker->streetAddress);
            $user->addAddress($address);
            $user->addWallet($wallet);

            $entityManager->persist($user);
            $entityManager->persist($refreshToken);
            $entityManager->persist($wallet);

            if ($i % 50 === 0) {
                $entityManager->flush();
                $entityManager->clear();
            }
        }

        return new User('email@example.com', 'Janusz Twardy');
    }
}