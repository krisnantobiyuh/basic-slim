<?php

$app->get('/',function($request,$response){
  $this->view->render($response,'home.twig');
});

$app->get('/k','App\Controllers\UserController:user');
