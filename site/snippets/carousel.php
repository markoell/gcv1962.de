<div id="carouselControls" class="carousel slide" data-ride="carousel" data-interval="10000">
  <div class="carousel-inner">
  <?php $i = 0; foreach($data->images() as $image): $i++; ?>
    <div class="carousel-item <?php e($i == 1, 'active') ?>" style="background-image: url(<?php echo($image->url()) ?>);">
      <!--<img class="d-block w-100" src="<?php echo($image->url()) ?>" alt="First slide">-->
    </div>
  <?php endforeach ?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
