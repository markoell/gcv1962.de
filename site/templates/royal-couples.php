<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
  <h1><?php echo $page->title()->html() ?></h1>
  <div class="row">
    <?php 
      dump($currentCouple);
    ?>
    <?php snippet('chronik/currentprinzenpaar', array('data' => $currentCouple)) ?>
    <?php snippet('chronik/previous-couples', array('data' => $items)) ?>
  </div>
</div>

  <?php snippet('scripts') ?>
  <?php snippet('footer/footerbar') ?>
