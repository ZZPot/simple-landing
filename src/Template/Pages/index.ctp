<?php
$this->assign('title', 'All stuff there');
$blockCount = 0;
$blocksInRow = 4; //should affect on col-md-* class
?>

<div class="row">
<?= $this->element('present_block', 
	[
		'block' => $news,
		'blocksInRow' => 4,
		'entriesInBlock' => 4,
		'entriesInRow' => 2,
		'entry_template' => 'present_entry',
		'id' => 'news',
		'align' => 'right',
	])?>
<?= $this->element('full_row_block', 
	[
		'block' => $pokemons,
		'blocksInRow' => 2,
		'entriesInBlock' => 3,
		'entry_template' => 'list_entry',
		'id' => 'pokemons'
	])?>
<?= $this->element('full_row_block', 
	[
		'block' => $wallpapers,
		'blocksInRow' => 4,
		'entriesInBlock' => 3,
		'entry_template' => 'list_entry',
		'id' => 'wallpapers'
	])?>
</div>
