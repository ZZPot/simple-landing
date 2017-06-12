<?php
$this->assign('title', 'All stuff there');
$blockCount = 0;
$blocksInRow = 4; //should affect on col-md-* class
?>

<div class="row">
<?= $this->element('row_block', ['block' => $news, 'blocksInRow' => 4, 'entry_template' => 'row_entry'])?>
<?= $this->element('row_block', ['block' => $pokemons, 'blocksInRow' => 2, 'entry_template' => 'full_entry'])?>
<?= $this->element('row_block', ['block' => $wallpapers, 'blocksInRow' => 4, 'entry_template' => 'row_entry'])?>
</div>