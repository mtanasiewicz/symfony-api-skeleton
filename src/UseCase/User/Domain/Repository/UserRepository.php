<?php


namespace App\UseCase\User\Domain\Repository;

use App\Shared\Model\Entity\User;
use App\Shared\Model\Repository\UserRepository as BaseUserRepository;

/**
 * All repositories in UseCases provide basic find functions by extending ServiceEntityRepositories located under
 * App/Shared/Model/Repository.
 *
 * Custom find functions, should be created only within Repositories inside UseCases.
 * With this approach we ensure that all the UseCase logic including finding necessary entities is separated
 * from base data model.
 */
class UserRepository extends BaseUserRepository
{
    public function findByEmail(string $email): ?User
    {
        return $this->findOneBy(['email' => $email]);
    }
}