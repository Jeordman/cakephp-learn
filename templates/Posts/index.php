<div class='row'>
  <div class='columns large-3 medium-4'>
    <h3>Sidebar</h3>
  </div>
  <div class='columns large-9 medium-8'>
    <?php foreach ($posts as $post) { ?>
      <h4><?= $this->Html->link($post['title'],'/posts/'.$post['id']) ?></h4>
      <p><?= $post['body'] ?></p>
      <hr>
    <?php } ?>
  </div>
</div>