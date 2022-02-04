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
      ['id' => 1, 'title' => 'First Post', 'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'],
      ['id' => 2, 'title' => 'Second Post', 'body' => 'This is the second post'],
      ['id' => 3, 'title' => 'Third Post', 'body' => 'This is the third post'],
    ];
    return $posts;
  }
}
