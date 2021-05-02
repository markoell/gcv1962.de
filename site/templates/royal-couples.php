<?php snippet('header', ['sticky' => true, 'css' => ["gcv-feature.css"]]) ?>

<div class="container pt-5">
  <h1><?php echo $page->title()->html() ?></h1>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
    <?php snippet('chronicles/first-couple', ['data' => $firstCouple]) ?>
    <?php snippet('chronicles/second-third-couple', ['secondCouple' => $secondCouple, 'thirdCouple' => $thirdCouple]) ?>
    <?php snippet('chronicles/previous-couples', ['data' => $previousCouples]) ?>
  </div>
</div>

  <?php snippet('scripts') ?>
  <?php snippet('footer/footerbar') ?>
