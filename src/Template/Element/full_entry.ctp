<?php
	$hasUrlEntry = !is_null($entry->url) && ($entry->url != '');
	$hasImageEntry = !is_null($entry->image) && ($entry->image != '');
?>

	<div class="entry-title"><?php if ($hasUrlEntry): ?>
		<a href="<?= h($entry->url)?>"><?php endif; ?><?= h($entry->title) ?><?php if($hasUrlEntry): ?></a><?php endif;?>
	</div>
	<div class="entry-body" <?php if ($hasImageEntry): ?>style="background-image: url(<?= h($entry->image)?>);"<?php endif; ?>>
		<?= h($entry->body) ?>
	</div>
	<div class="entry-footer">Modified <?= h($entry->modified) ?></div>
