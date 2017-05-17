<?php

$this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', ['block' => true]);
$this->Html->css('land', ['block' => true]);

$this->Html->script('https://code.jquery.com/jquery-3.1.1.slim.min.js', ['block' => true]);
$this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', ['block' => true]);
$this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', ['block' => true]);

?>
<!doctype html>
<html lang="ru">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="jumbotron top-jumb text-center">
		<h1><a href=""><?= $this->fetch('title') ?></a></h1>
	</div>
	<div class="container-fluid">
		<?= $this->Flash->render() ?>
    </div>
	<div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
