<?php
$this->assign('title', 'All stuff there');
$blockCount = 0;
$blocksInRow = 2; //should affect on col-md-* class
?>
<h3><?= __('Blocks') ?></h3>

<?php foreach ($blocks as $block): ?>
	<?php $newRow = $blockCount % $blocksInRow; ?>
	<?php if ($newRow == 0):?>
		<div class="row">
	<?php endif; ?>
		<?= $this->element('row_block', ['block' => $block, 'blocksInRow' => $blocksInRow])?>
	<?php if ($newRow == $blocksInRow - 1):?>
		</div>
	<?php endif; ?>
	<?php $blockCount++;?>
<?php endforeach; ?>