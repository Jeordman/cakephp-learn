<?php foreach ($posts as $post) : ?>
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-primary">Category</strong>
      <h3 class="mb-0"><?= $post['title'] ?></h3>
      <div class="mb-1 text-muted">date</div>
      <p class="card-text mb-auto"><?= $post['body'] ?></p>
      <?= $this->Html->link('Read More', '/posts/' . $post['id'], ['class', "stretched-link"]) ?>
    </div>
  </div>
<?php endforeach ?>