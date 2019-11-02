<div class="col-lg-4 mb-4">
  <div class="card">
      <div class="card-img-overlay pt-0 pr-0 pl-0">
        <h4 class="card-title gcv-card-title <?php e($data->hasImages(), 'text-white') ?>" ><?= $data->title()->html() ?></h4>
      </div>
    <?php if($data->hasImages()): ?>
      <img src="<?= $data->image()->resize(500)->url() ?>" class="card-img-top"> 
    <?php else: ?>
      <img src="<?= $site->url() ?>/assets/images/blank.jpg" alt="" class="card-img-top">
    <?php endif ?>
    <div class="card-footer gcv-card-footer"><?php echo $data->text()->kirbytext() ?></div>
  </div>
</div>
