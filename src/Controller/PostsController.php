<?php

namespace App\Controller;

use App\Controller\AppController;

// always make controller plural
class PostsController extends AppController
{

    private $posts = [
      ['id' => 1, 'title' => 'First Post', 'body' => 'This is the first post'],
      ['id' => 2, 'title' => 'Second Post', 'body' => 'This is the second post'],
      ['id' => 3, 'title' => 'Third Post', 'body' => 'This is the third post'],
    ];

  public function index()
  {
    $this->set('posts', $this->posts);
  }

  public function view($id)
  {
    // example post
    $post = [
      'id' => $id,
      'title' => 'First Post',
      'body' => 'This is the body of post ',
    ];
    $this->set('posts', $this->posts);
    $this->set('post', $post);
  }

  public function create()
  {
    die('<h1>Creating post</h1>');
  }


  public function edit($id)
  {
    die('this is edit post id: ' . $id);
  }

  private function _logLineBreak()
  {
    echo '<br>';
    echo '<br>';
  }

  public function hello()
  {
    // example of arr
    $this->_logLineBreak();
    var_dump($this->request->getQueryParams());

    $name = $this->request->getQuery('name');
    $age = $this->request->getQuery('age');
    $city = $this->request->getQuery('city');

    if (!$name || !$age || !$city) {
      $this->_logLineBreak();
      die('<h1>Please provide name, age and city in query</h1>');
    }

    $this->_logLineBreak();
    var_dump($this->request->getAttribute('webroot'));
    var_dump($this->request->getAttribute('base'));
    var_dump($this->request->getAttribute('here'));

    $this->_logLineBreak();
    if ($this->request->is('post')) {
      die('<h1>This was a POST request</h1>');
    } else if ($this->request->is('get')) {
      die('<h1>This was a GET request</h1>');
    } else {
      die('<h1>Other request</h1>');
    }
  }
}
