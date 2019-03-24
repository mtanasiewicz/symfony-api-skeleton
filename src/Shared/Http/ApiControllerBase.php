<?php


namespace App\Shared\Http;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use League\Tactician\CommandBus;


class ApiControllerBase extends AbstractFOSRestController
{
    /**
     * @var CommandBus
     */
    protected $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }
}