<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
  <h1><?php echo $page->title()->html() ?></h1>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
    <div class="col-sm-12 col-lg-8 mb-4">
      <?php snippet('chronik/royal-couple', array('data' => $firstCouple)) ?>
    </div>
    <div class="col-sm-12 mb-4">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-1 h-100">
        <div class="col mb-4 mb-sm-0 mb-lg-4">
          <?php snippet('chronik/royal-couple', array('data' => $secondCouple)) ?>
        </div>
        <div class="col align-self-end">
          <?php snippet('chronik/royal-couple', array('data' => $thirdCouple)) ?>
        </div>

      </div>
    </div>
    <?php snippet('chronik/previous-couples', array('data' => $previousCouples)) ?>
  </div>
</div>

  <?php snippet('scripts') ?>
  <?php snippet('footer/footerbar') ?>
