<?php 
	$hasUrl = !is_null($block->url) && ($block->url != ''); 
	$hasImg = !is_null($block->image) && ($block->image != '');
?>

<div class="col-md-<?= 12/$blocksInRow; ?> block" <?php if($hasImg):?>style="background-image: url(<?= $block->image?>);"<?php endif;?>>
<div class="membrana"></div>
<div class="jumbotron text-center news-jumb">
	<?php if ($hasUrl): ?><a href="<?= h($block->url)?>"><?php endif; ?><?= h($block->title) ?><?php if($hasUrl): ?></a><?php endif;?>
</div>
<?php foreach ($block->entries as $entry): ?>
	<?= $this->element($entry_template, ['entry' => $entry])?>
<?php endforeach; ?>
</div>