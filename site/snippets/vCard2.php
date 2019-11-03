<div class="col-lg-4 mb-4">
  <div class="card">
      <div class="card-img-overlay">
        <h4 class="card-title <?php e($data->hasImages(), 'text-white') ?>"><?= $data->year()->html() ?></h4>
      </div>
    <?php if($data->hasImages()): ?>
      <img src="<?= $data->image()->resize(427,600)->url() ?>" alt="" class="card-img-top">
    <?php else: ?>
      <img src="<?= $site->url() ?>/assets/images/blank.jpg" alt="" class="card-img-top">
    <?php endif ?>
    <div class="card-footer" style="background-color: var(--bgcolor)"><?php echo $data->title()->kirbytext() ?></div>
  </div>
</div>
