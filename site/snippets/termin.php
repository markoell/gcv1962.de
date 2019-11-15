<div class="row">
  <div class="col-2">
    <h4><span class="badge badge-secondary"><?= $item->date()->toDate('d') ?></span></h4>
    <h5><?= $item->date()->toDate('M - Y') ?></h5>
  </div>
  <div class="col">
    <h5 class="text-uppercase text-left"><?= $item->title()->html() ?>
    </h5>
    <ul class="list-inline text-justify">
      <li class="list-inline-item"><i class="far fa-calendar mr-2" aria-hidden="true"></i><?= strftime('%A', $item->date()->toTimestamp()) ?>
      </li>
      <li class="list-inline-item"><i class="far fa-clock mr-2" aria-hidden="true"></i><?= $item->time()->toDate('H:i') ?>
      </li>
      <li class="list-inline-item"><i class="fas fa-map-marker mr-2" aria-hidden="true"></i><?= $item->place() ?>
      </li>
      <?= e($item->public()->isTrue(), '<li class="badge badge-success badge-pill">Öffentlich</li>') ?>
    </ul>
  </div>
  <?php if ($item->target()->isNotEmpty()): ?>
  <div class="col-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#hintModal_<?= $id ?>"><?= $item->targettext()->html()?><?php $item->targettext() ?></button>
  </div>
  <?php endif ?>
</div>