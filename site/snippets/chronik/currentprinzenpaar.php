  <div class="col mb-4">
  <div class="card h-100" style="background-color: var(--bgcolor)">
    <h4 class="card-header">
      <?php echo $data->year()->html() ?>
    </h4>
    <div class="card-body">
      <div class="row">
        <?php if($data->hasImages()): ?>
          <p class="col-lg-4"><img src="<?= $data->image()->resize(500)->url() ?>" alt="" class="rounded card-img"></p>
        <?php endif ?>
        <div class="col card-text">
          <h2><?php echo $data->title()->kirbytext() ?></h2>
          <p><?php echo $data->text()->kirbytext() ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
