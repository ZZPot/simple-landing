<?php 
	$hasUrl = !is_null($block->url) && ($block->url != ''); 
	$hasImg = !is_null($block->image) && ($block->image != '');
?>
<div class="row-block" <?php if($hasImg):?> style="background-image: url(<?= $block->image?>);"<?php endif;?>>
<div class="platform">
	<?php if ($hasUrl): ?><a href="<?= h($block->url)?>"><?php endif; ?>
		<div class="block-title"><?= h($block->title) ?></div>
	<?php if($hasUrl): ?></a><?php endif;?>
	<ul class="entry-list">
	<?php foreach ($block->entries as $entry): ?>
		<?= $this->element($entry_template, ['entry' => $entry])?>
	<?php endforeach; ?>
	</ul>
</div>
</div>