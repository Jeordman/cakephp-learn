<!-- DEFAULT WRAPPING STYLE -->
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

  <?= $this->Html->css(['https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css']) ?>

  <?= $this->Html->meta(
    'keywords',
    'PHP, CakePHP, frameworks'
  ); ?>
  <?= $this->Html->meta(
    'description',
    'This is an example of a meta description.'
  ); ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
<!--  dynamic css example  -->
  <!-- <style>
    body{
      <?= $this->Html->style([(
        'background-color: #f5f5f5;'
      )]) ?>
    }
  </style> -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand">Practice Blog</a>
      <a class="navbar-brand" aria-current="page" href="/myblog"><?= $this->fetch('title') ?></a>
      <a class="navbar-brand" aria-current="page" href="/myblog"><?= $this->Html->link("Create Post", "/posts/create") ?></a>
    </div>
  </nav>
  <main class="main">
    <div class="container">

      <div class='row'>
        <div class='col-md-4 col-lg-3 col-sm-4'>
          <?= $this->element('latest') ?>
        </div>
        <div class='col-md-8 col-lg-9 col-sm-8'>
          <?= $this->Flash->render() ?>
          <?= $this->fetch('content') ?>
        </div>
      </div>

    </div>
  </main>
  <footer>
  </footer>
</body>

</html>