<div class="card mb-3">
  <div class="row">
    <div class="col-md-4">
      <img src="<?= $data->image()->resize(500)->url() ?>" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $data->title()->h() ?></h5>
        <p class="card-text"><small class="text-muted"><?= $data->description()->kt() ?></small></p>
        <?php 
          $items = $data->valued_members()->toStructure();
          foreach (group_by('year', $items) as $item): ?>
            <h2><?= $item->year()->html() ?></h2>
            <?php foreach ($item->images()->toFiles() as $image): ?>
              <img src="<?= $image->crop(400)->url() ?>">
            <?php endforeach ?>
            <p><?= $item->price() ?></p>
          <?php endforeach ?>
      </div>
    </div>
  </div>
</div>