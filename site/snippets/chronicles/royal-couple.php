<?php if($data != null): ?>

  <div class="card text-success">
    <div class="hovereffect">
      <?php if($data->hasImages()): ?>
        <img src="<?= $data->image()->resize(500)->url() ?>" alt="<?= $data->peerage()->kirbytext() ?>" class="card-img-top">
      <?php else: ?>
        <img src="<?= $site->url() ?>/assets/images/blank.jpg" alt="" class="card-img-top">
      <?php endif ?>
      <div class="overlay">
        <em><?= $data->civil()->kirbytext() ?></em>
      </div>
    <div class="card-img-overlay">
      <h4 class="card-title <?php e($data->hasImages(), 'text-white') ?>"><?= $data->title()->html() ?></h4>
    </div>
    </div>
    <div class="card-footer">
    <p class="h4"><?= $data->peerage()->kirbytext() ?></p>
    </div>
  </div>

<?php endif ?>