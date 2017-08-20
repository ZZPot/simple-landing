<?php 
	$hasUrl = !is_null($block->url) && ($block->url != ''); 
	$hasImg = !is_null($block->image) && ($block->image != '');
?>
<div class="present-block">
<div class="platform">
	<?php if ($hasUrl): ?><a href="<?= h($block->url)?>"><?php endif; ?>
		<div class="block-title present-title"><?= h($block->title) ?></div>
	<?php if($hasUrl): ?></a><?php endif;?>
	<div class="row">
	<?php if($align == 'left'):?>
		<div class="col-md-6 present-block-img-col">
			<?= $this->element('present_block_img', ['hasImg' => $hasImg, 'image' => h($block->image)])?>
		</div>
	<?php endif; ?>
	<div class="col-md-6">
		<?php $entryCount = 0; ?>
		<?php foreach ($block->entries as $entry): ?>
		<?php 
			$newRow = (($entryCount % $entriesInRow) == 0); 
			$nextNewRow = ((($entryCount+1) % $entriesInRow) == 0); 
		?>
			<?php if ($newRow): ?> <div class="row"><?php endif; ?>
				<div class="col-md-<?= 12/$entriesInRow; ?>">
				<?= $this->element($entry_template, ['entry' => $entry]) ?>
				</div>
			<?php $entryCount++; ?>	
			<?php if ($nextNewRow || ($entryCount == count($block->entries))): ?></div><?php endif; ?>
			
		<?php endforeach; ?>
	</div>
	<?php if($align == 'right'):?>
	<div class="col-md-6 present-block-img-col">
		<?= $this->element('present_block_img', ['hasImg' => $hasImg,  'image' => h($block->image)])?>
	</div>
	<?php endif; ?>
	</div>
</div>
</div>
