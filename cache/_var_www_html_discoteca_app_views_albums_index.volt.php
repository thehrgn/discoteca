
<h1>Albums</h1>
<?= $this->partial('layouts/menu') ?>
<?php foreach ($albums as $album) { ?>
<?= $album->genre->name ?>
<?php } ?>
