<?php foreach ($posts as $post): ?>
  <h4><?= $this->Html->link($post['title'], '/posts/' . $post['id']) ?></h4>
  <p><?= $post['body'] ?></p>
  <hr>
<?php endforeach ?>