<div class='panel panel-default'>
  <div class='panel-heading'>
    <h3 class='panel-title'><?= $post['title'] ?></h3>
  </div>
  <div class='panel-body'>
    <?= $post['body'] ?>
    <?= $this->Html->image($post['image'], ['alt' => 'randomImage']) ?>
    <br>
    <?= $this->Html->nestedList($languages); ?>
    <br>
    <table class='table table-striped'>
      <?= $this->Html->tableHeaders(['Id', 'Name', 'Email']); ?>
      <?= $this->Html->tableCells([
        ['1', 'Jeordin', 'test@test.com'],
        ['2', 'Matt', 't@test.com']
      ]); ?>
    </table>
  </div>
</div>