<?php

namespace AppBundle\Ui\Controller;

use League\Tactician\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController extends Controller
{
    /**
     * @var \Twig_Environment
     */
    private $template;

    /**
     * @var CommandBus
     */
    private $bus;

    /**
     * @var CommandBus
     */
    private $queryBus;




    /**
     * AbstractController constructor.
     * @param CommandBus $bus
     * @param CommandBus $queryBus
     */
    public function __construct(CommandBus $bus, CommandBus $queryBus)
    {
        $this->bus = $bus;
        $this->queryBus = $queryBus;
    }

    /**
     * @param object $commandRequest
     * @return mixed
     */
    public function handle($commandRequest)
    {
        return $this->bus->handle($commandRequest);
    }

    /**
     * @param object $commandRequest
     * @return mixed
     */
    public function ask($commandRequest)
    {
        return $this->queryBus->handle($commandRequest);
    }



}