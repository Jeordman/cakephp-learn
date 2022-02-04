<?php

use Cake\Form\Form;

use function PHPSTORM_META\type;

?>
<h3>Create Post</h3>
<?= $this->Form->create(); ?>
<?= $this->Form->input('title', array(
  'label' => 'Title',
  'class' => 'form-control',
  'placeholder' => 'Title'
)); ?>
<?= $this->Form->input('body', array(
  'label' => 'Body',
  'class' => 'form-control',
  'type' => 'textarea',
  'escape' => false,
  'placeholder' => 'Body'
)); ?>
<?= $this->Form->input('category', array(
  'label' => 'Category',
  'type' => 'select',
  'class' => 'form-control',
  'empty' => 'Select Category',
  'options' => array(
    '1' => 'Web Dev',
    '2' => 'Design',
    '3' => 'Marketing'
  )
)); ?>
<?= $this->Form->input('author', array(
  'label' => 'Author',
  'type' => 'select',
  'class' => 'form-control',
  'empty' => 'Select Author',
  'options' => array(
    '1' => 'Jeordin',
    '2' => 'Matt',
    '3' => 'John'
  )
)); ?>
<!-- <?= $this->Form->input('submittedFile', array(
        'label' => 'Submitted File',
        'type' => 'file',
        'class' => 'form-control',
        'empty' => 'Select File'
      )); ?> -->
    
<?= $this->Form->submit('Submit', array(
  'class' => 'btn btn-primary'
)); ?>

<? $this->Form->end(); ?>