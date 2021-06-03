<?php snippet('header', ['sticky' => true]) ?>

<div class="container pt-5">
  <h1><?= $pageTitle ?></h1>
  <?php foreach($honorations as $item):  ?>
    <?php snippet("chronicles/honorations", ['data' => $item])?>
  <?php endforeach //$honorations ?>
</div>

  <?php snippet('scripts') ?>
  <?php snippet('footer/footerbar') ?>
