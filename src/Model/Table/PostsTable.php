<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
  public function initialize(array $config): void
  {
    $this->addBehavior('Timestamp');
  }

  public function validationDefault(Validator $validator): Validator
  {
    $validator
      ->notEmpty('title')
      ->requirePresence('title')
      ->notEmpty('body')
      ->requirePresence('body')
      ->notEmpty('author')
      ->requirePresence('author')
      ->notEmpty('category')
      ->requirePresence('category');

    return $validator;
  }
}
