<?php
	$hasUrlEntry = !is_null($entry->url) && ($entry->url != '');
	$hasImageEntry = !is_null($entry->image) && ($entry->image != '');
?>
<div class="row">	
	<div class="col-md-4">
		<div class="container-fluid" <?php if ($hasImageEntry): ?>style="background-image: url(<?= h($entry->image)?>); background-size: auto 100%; background-position: center center; background-repeat: no-repeat;"<?php endif; ?>> </div>
	</div>
	<div class="col-md-4"><?php if ($hasUrlEntry): ?><a href="<?= h($entry->url)?>"><?php endif; ?><?= h($entry->title) ?><?php if($hasUrlEntry): ?></a><?php endif;?></div>
	<div class="col-md-4"><?= h($entry->modified) ?></div>
</div>