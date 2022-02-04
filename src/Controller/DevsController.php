<?php

namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController {
  private $posts;

  public function initialize(): void
  {
    $this->loadComponent('Devs');
    $this->set('posts', $this->posts);
  }

  public function index() {
    $posts = $this->loadModel('Posts')->find('all');
    $this->set(compact('posts'));

    $this->set('password', $this->Devs->generatePassword());
  }
}