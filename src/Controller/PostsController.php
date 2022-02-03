<?php

namespace App\Controller;

use App\Controller\AppController;

// always make controller plural
class PostsController extends AppController
{
  public function initialize(): void
  {
    // log
    var_dump('PostsController::initialize()');
  }

  public function index()
  {
    die('<h1>PostsController::index()</h1>');
  }

  public function view($id)
  {
    die('this is post id: ' . $id);
  }
}
