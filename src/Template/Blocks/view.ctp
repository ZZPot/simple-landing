<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Block'), ['action' => 'edit', $block->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Block'), ['action' => 'delete', $block->id], ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entries'), ['controller' => 'Entries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entry'), ['controller' => 'Entries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blocks view large-9 medium-8 columns content">
    <h3><?= h($block->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($block->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($block->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($block->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($block->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($block->body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($block->url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($block->image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Glyph') ?></h4>
        <?= $this->Text->autoParagraph(h($block->glyph)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Entries') ?></h4>
        <?php if (!empty($block->entries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Block Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Glyph') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($block->entries as $entries): ?>
            <tr>
                <td><?= h($entries->id) ?></td>
                <td><?= h($entries->block_id) ?></td>
                <td><?= h($entries->title) ?></td>
                <td><?= h($entries->body) ?></td>
                <td><?= h($entries->url) ?></td>
                <td><?= h($entries->image) ?></td>
                <td><?= h($entries->glyph) ?></td>
                <td><?= h($entries->created) ?></td>
                <td><?= h($entries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entries', 'action' => 'view', $entries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entries', 'action' => 'edit', $entries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entries', 'action' => 'delete', $entries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
