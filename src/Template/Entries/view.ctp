<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entry'), ['action' => 'edit', $entry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entry'), ['action' => 'delete', $entry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entry'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entries view large-9 medium-8 columns content">
    <h3><?= h($entry->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Block') ?></th>
            <td><?= $entry->has('block') ? $this->Html->link($entry->block->title, ['controller' => 'Blocks', 'action' => 'view', $entry->block->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($entry->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entry->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entry->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entry->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Glyph') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->glyph)); ?>
    </div>
</div>
