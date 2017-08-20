<?php
	$hasUrlEntry = !is_null($entry->url) && ($entry->url != '');
	$hasImageEntry = !is_null($entry->image) && ($entry->image != '');
?>
<div class="present-entry">	
	<?php if ($hasUrlEntry): ?><a href="<?= h($entry->url)?>"><?php endif; ?>
	<?php if ($hasImageEntry): ?>
		<div class="present-entry-image" style="background-image: url(<?= h($entry->image)?>);"></div>
	<?php endif; ?>
	<div class="present-entry-title"><?= h($entry->title) ?></div>
	<?php if($hasUrlEntry): ?></a><?php endif;?>
</div>