<?php foreach ($posts as $post) : ?>
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-primary">Category</strong>
      <h3 class="mb-0"><?= $post['title'] ?></h3>
      <div class="mb-1 text-muted"><?= $post['created']->format(DATE_RFC850); ?></div>
      <?= $this->Text->truncate($post['body'], 200, ['ellipsis' => '...', 'exact' => false]) ?>
      <?= $this->Html->link('Read More', '/posts/' . $post['id'], ['class', "stretched-link"]) ?>
    </div>
  </div>
<?php endforeach ?>