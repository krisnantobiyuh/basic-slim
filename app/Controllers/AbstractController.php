<?php

  namespace App\Controllers;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Psr\Http\Message\ResponseInterface as Response;
use Slim\Container;
  /**
   *
   */
  abstract class AbstractController
  {
    protected $container;

    public function __construct(Container $container)
    {
      return $this->container = $container;
    }

    public function __get($property)
    {
      return $this->container->{$property};
    }

  }
