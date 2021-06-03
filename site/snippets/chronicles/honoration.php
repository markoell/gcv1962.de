
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-12 col-md-7 col-lg-5">
      <img src="<?= $data->image()->resize(400)->url() ?>" class="card-img" alt="">
    </div>
    <div class="col">
      <div class="card-body">
        <h5 class="card-title"><?= $data->title()->h() ?></h5>
        <p class="card-text"><small class="text-muted"><?= $data->description()->kt() ?></small></p>
        <ul>
        <?php 
          $items = $data->valued_members()->toStructure();

          foreach ($items as $item): ?>
            <li><?= $item->year()->toString() ?></li>
            <?php foreach ($item->images()->toFiles() as $image): ?>
              <img src="<?= $image->crop(400)->url() ?>">
            <?php endforeach ?>
            <p><?= $item->price() ?></p>
          <?php endforeach ?>
          </ul>
      </div>
    </div>
  </div>
</div>