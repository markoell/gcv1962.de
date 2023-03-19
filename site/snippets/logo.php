<?php if ($file = $page->files()->filterBy('extension', 'svg')->first()) :?>
<?= svg($file) ?>
<?php endif ?>