<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
  <h1><?php echo $page->title()->html() ?></h1>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
    <?php snippet('chronicle/first-couple', ['data' => $firstCouple]) ?>
    <?php snippet('chronicle/second-third-couple', ['secondCouple' => $secondCouple, 'thirdCouple' => $thirdCouple]) ?>
    <?php snippet('chronik/previous-couples', ['data' => $previousCouples]) ?>
  </div>
</div>

  <?php snippet('scripts') ?>
  <?php snippet('footer/footerbar') ?>
