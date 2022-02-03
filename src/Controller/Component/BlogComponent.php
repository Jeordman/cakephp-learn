<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class BlogComponent extends Component
{
  public function sayHello()
  {
    return 'Hello World';
  }

  public function getPosts()
  {
    $posts = [
      ['id' => 1, 'title' => 'First Post', 'body' => 'This is the first post'],
      ['id' => 2, 'title' => 'Second Post', 'body' => 'This is the second post'],
      ['id' => 3, 'title' => 'Third Post', 'body' => 'This is the third post'],
    ];
    return $posts;
  }
}
