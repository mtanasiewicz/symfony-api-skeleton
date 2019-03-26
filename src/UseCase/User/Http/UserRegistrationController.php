<?php


namespace App\UseCase\User\Http;


use App\Shared\Http\ApiControllerBase;
use App\Shared\Model\Entity\Address;
use App\Shared\Model\Entity\User;
use App\Shared\Model\Entity\Wallet;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Faker\Factory;
use Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserRegistrationController extends AbstractController
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
                $faker->password,
                $faker->name
            );

            $refreshToken = new RefreshToken();
            $refreshToken->setRefreshToken();
            $refreshToken->setUsername($user->getEmail());
            $refreshToken->setValid((new DateTime())->modify('+ 10 days'));

            $address = new Address();
            $address->setFlat($faker->numberBetween(1,1000));
            $address->setStreet($faker->streetName);
            $address->setStreetNumber($faker->streetAddress);
            $user->addAddress($address);

            $entityManager->persist($user);
            $entityManager->persist($refreshToken);

            if ($i % 50 === 0) {
                $entityManager->flush();
                $entityManager->clear();
            }
        }

        return new Response('yo');
    }
}