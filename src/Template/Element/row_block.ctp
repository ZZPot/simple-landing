<?php $hasUrl = !is_null($block->url) && ($block->url != ''); ?>
<div class="col-md-<?= 12/$blocksInRow; ?> block">
<div class="jumbotron text-center news-jumb">
	<?php if ($hasUrl): ?><a href="<?= h($block->url)?>"><?php endif; ?><?= h($block->title) ?><?php if($hasUrl): ?></a><?php endif;?>
</div>
<?php foreach ($block->entries as $entry): ?>
	<?= $this->element('row_entry', ['entry' => $entry])?>
<?php endforeach; ?>
</div>