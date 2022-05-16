<?php if($page->title()->exists()): ?>
  <h1 id="<?= $data->title()->html() ?>"><?= $data->title()->html() ?></h1>
<?php endif ?>

<?php if($page->headline()->exists()): ?>
  <h2><?= $page->headline()->kirbytext() ?></h2>
<?php endif ?>

<?php e($page->text()->exists(), $page->text()->kirbytext()) ?>