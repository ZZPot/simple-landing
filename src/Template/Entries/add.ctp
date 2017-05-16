<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entries form large-9 medium-8 columns content">
    <?= $this->Form->create($entry) ?>
    <fieldset>
        <legend><?= __('Add Entry') ?></legend>
        <?php
            echo $this->Form->control('block_id', ['options' => $blocks]);
            echo $this->Form->control('title');
            echo $this->Form->control('body');
            echo $this->Form->control('url');
            echo $this->Form->control('image');
            echo $this->Form->control('glyph');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
