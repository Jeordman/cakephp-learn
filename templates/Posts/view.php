<div class='panel panel-default'>
  <div class='panel-heading'>
    <h3 class='panel-title'><?= $post['title'] ?></h3>
  </div>
  <div class='panel-body'>
    <?= $post['body'] ?>
  </div>
</div>

<?= $this->Html->link('Edit Post', ['action' => 'edit', $post['id']], ['class' => 'btn btn-default']); ?>