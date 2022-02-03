<?php

namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController {
  private $posts;

  public function initialize(): void
  {
    $this->loadComponent('Blog');
    $this->posts = $this->Blog->getPosts();
  }

  public function index() {
    $this->set('posts', $this->posts);
  }
}