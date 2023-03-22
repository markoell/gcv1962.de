<?php $file = $page->files()->filterBy('extension', 'svg')->first() ?>
<?php if (!is_null($file)) :?>
<?= svg($file) ?>
<?php endif ?>