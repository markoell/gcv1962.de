<div class="card mb-3">
  <div class="row">
    <div class="col-md-4">
      <img src="<?= $data->image()->resize(500)->url() ?>" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $data->title()->h() ?></h5>
        <p class="card-text"><small class="text-muted"><?= $data->description()->kt() ?></small></p>
      </div>
    </div>
  </div>
</div>