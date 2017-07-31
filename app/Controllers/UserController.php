<?php

  namespace App\Controllers;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Psr\Http\Message\ResponseInterface as Response;
  /**
   *
   */
  class UserController extends AbstractController
  {
    public function user(Request $request,Response $response)
    {
      return $this->view->render($response,'home.twig');
    }
  }
