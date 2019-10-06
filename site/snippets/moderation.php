<div class="card bg-transparent border-0 pt-4">
  <h4 class="card-header">
    <div class="container">
      <?= $data->title()->html() ?>
    </div>
  </h4>
  <div class="card-body">
    <div class="container">
        <?php foreach($data->children() as $sub): ?>
            <?php snippet($sub->intendedTemplate(), array('data' => $sub)) ?>
        <?php endforeach ?>
    </div>
  </div>
</div>
