<?php
$this->assign('title', 'All stuff there');
$blockCount = 0;
$blocksInRow = 3; //should affect on col-md-* class
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
	<div class="col-md-<?= 12/$blocksInRow; ?> block">
	<div class="jumbotron text-center news-jumb">
		<?php if ($hasUrl): ?><a href="<?= h($block->url)?>"><?php endif; ?><?= h($block->title) ?><?php if($hasUrl): ?></a><?php endif;?>
	</div>

	<?php foreach ($block->entries as $entry): ?>
		<?php
			$hasUrlEntry = !is_null($entry->url) && ($entry->url != '');
			$hasImageEntry = !is_null($entry->image) && ($entry->image != '');
		?>

		<div class="row"<?php if ($hasImageEntry): ?>style="background-image: url(<?= h($entry->image)?>); background-size: auto 100%"<?php endif; ?>>	
			<div class="col-md-3"><?= $this->Number->format($entry->id) ?></div>
			<div class="col-md-3"><?php if ($hasUrlEntry): ?><a href="<?= h($entry->url)?>"><?php endif; ?><?= h($entry->title) ?><?php if($hasUrlEntry): ?></a><?php endif;?></div>
			<div class="col-md-3"><?= h($entry->created) ?></div>
			<div class="col-md-3"><?= h($entry->modified) ?></div>
		</div>
	<?php endforeach; ?>
	</div>

	<?php if ($newRow == $blocksInRow - 1):?>
		</div>
	<?php endif; ?>
	<?php $blockCount++;?>
<?php endforeach; ?>