<?php
  $fmt = new IntlDateFormatter(
    "de-DE",
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'Europe/Berlin',
    IntlDateFormatter::GREGORIAN,
    'EEEE'
  );
?>

<div class="row align-items-center">
  <div class="col-2">
    <h4><span class="badge badge-secondary"><?= $item->date()->toDate('d') ?></span></h4>
    <h5><?= $item->date()->toDate('M - Y') ?></h5>
  </div>
  <div class="col">
    <h5 class="text-uppercase text-left"><?= $item->title()->html() ?>
    </h5>
    <ul class="list-inline text-justify">
      <li class="list-inline-item"><i class="far fa-calendar mr-2" aria-hidden="true"></i><?= $fmt->format($item->date()->ToTimestamp()) ?>
      </li>
      <li class="list-inline-item"><i class="far fa-clock mr-2" aria-hidden="true"></i><?= $item->date()->toDate('H:i') ?>
      </li>
      <li class="list-inline-item"><i class="fas fa-map-marker mr-2" aria-hidden="true"></i><?= $item->location() ?>
      </li>
      <?= e(in_array("public", $item->categories()->split()), '<li class="badge badge-success badge-pill">Öffentlich</li>') ?>
    </ul>
  </div>
  <?php if (in_array("tickets", $item->categories()->split())): ?>
  <div class="col-3">
    <a href="<?= $item->link()->toUrl()?>" class="btn btn-outline-success">Karten kaufen</a>
  </div>
  <?php endif ?>
</div>