<?php if($data != null): ?>

  <div class="card h-100">
      <div class="card-img-overlay">
        <h4 class="card-title <?php e($data->hasImages(), 'text-white') ?>"><?= $data->title()->html() ?></h4>
      </div>
    <?php if($data->hasImages()): ?>
      <img src="<?= $data->image()->resize(500)->url() ?>" alt="" class="card-img-top">
    <?php else: ?>
      <img src="<?= $site->url() ?>/assets/images/blank.jpg" alt="" class="card-img-top">
    <?php endif ?>
    <div class="card-footer h-100" style="background-color: var(--bgcolor)"><?= $data->peerage()->kirbytext() ?></div>
  </div>

<?php endif ?>