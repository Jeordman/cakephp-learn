<div class='row'>
  <div class='columns large-3 medium-4'>
    <h3>Sidebar</h3>
  </div>
  <div class='columns large-9 medium-8'>
    <?php foreach ($posts as $post) { ?>
      <h4><?= $post['title'] ?></h4>
      <p><?= $post['body'] ?></p>
    <?php } ?>
  </div>
</div>