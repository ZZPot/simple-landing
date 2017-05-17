<?php
$this->assign('title', 'All stuff there');
$blockCount = 0;
$blocksInRow = 2; //should affect on col-md-* class
?>
<h3><?= __('Blocks') ?></h3>

<?php foreach ($blocks as $block): ?>
<?php
	$hasUrl = !is_null($block->url) && ($block->url != '');
	$newRow = $blockCount % $blocksInRow;
?>
<?php if ($newRow == 0):?>
<div class="row">
<?php endif; ?>
<div class="col-md-6 block">
<div class="row row-header text-left">
	<div class="col-md-3"><?= 'id'?></div>
	<div class="col-md-3"><?= 'title'?></div>
	<div class="col-md-3"><?= 'created'?></div>
	<div class="col-md-3"><?= 'modified'?></div>
</div>
<div class="row">	
	<div class="col-md-3"><?= $this->Number->format($block->id) ?></div>
	<div class="col-md-3"><?php if ($hasUrl): ?><a href="<?= h($block->url)?>"><?php endif; ?><?= h($block->title) ?><?php if($hasUrl): ?></a><?php endif;?></div>
	<div class="col-md-3"><?= h($block->created) ?></div>
	<div class="col-md-3"><?= h($block->modified) ?></div>
</div>
</div>
<?php if ($newRow == $blocksInRow - 1):?>
</div>
<?php endif; ?>
<?php $blockCount++;?>
<?php endforeach; ?>