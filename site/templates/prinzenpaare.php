<?php snippet('header', array('sticky' => true)) ?>

<div class="container pt-5">
  <h1><?php echo $page->title()->html() ?></h1>
  <div class="row">
    <?php 
      $items = $kirby->collection('prinzenpaare');
      $current = $items->first();  
    ?>
    <?php snippet('chronik/currentPrinzenpaar', array('data' => $current)) ?>
    <div class="w-100"></div>
    <?php $n = 0; foreach($items as $item):

      $n++;
      if($item == $current) {
        continue;
      } 

      snippet('chronik/prinzenpaar', array('data' => $item));
    
    endforeach ?>
  </div>
</div>

  <?php snippet('scripts') ?>
  <?php snippet('footer/footerbar') ?>
