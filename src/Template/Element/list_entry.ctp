<?php
	$hasUrlEntry = !is_null($entry->url) && ($entry->url != '');
	$hasImageEntry = !is_null($entry->image) && ($entry->image != '');
?>
<li class="list-entry">	
	<?php if ($hasUrlEntry): ?><a href="<?= h($entry->url)?>"><?php endif; ?>
		<div class="entry-title"><?= h($entry->title) ?></div>
	<?php if($hasUrlEntry): ?></a><?php endif;?>
	<?php if ($hasImageEntry): ?>
		<div class="entry-image" style="background-image: url(<?= h($entry->image)?>);"></div>
	<?php endif; ?>
	<div class="entry-body list-entry-body"><?= h($entry->body) ?></div>
</li>