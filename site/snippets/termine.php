<div class="container pt-2 pb-2">
<?php  //dump($page->dates()->toStructure())
setlocale(LC_TIME, "de_DE");
// using the `toStructure()` method, we create a structure collection
// we can then loop through the entries and render the individual fields
$items = $page->dates()->toStructure(); ?>

<ul class="list-group list-group-flush">
<?php foreach ($items as $item): ?>
<li class="list-group-item">
<div class="row">
    <div class="col-2">
  <h4><span class="badge badge-secondary"><?= $item->date()->toDate('d') ?></span></h4>
  <h5><?= $item->date()->toDate('M - Y') ?><h5>
  </div>
  <div class="col-10">
  <h5 class="text-uppercase text-left"><?= $item->title()->html() ?> <?= e($item->public()->isTrue(), '<a href="#" class="btn btn-success ml-5 btn-large">Tickets</a>') ?></h5>
  <ul class="list-inline text-justify">
        <li class="list-inline-item"><i class="far fa-calendar mr-2" aria-hidden="true"></i><?= $item->date()->toDate('l') ?></li>
        <li class="list-inline-item"><i class="far fa-clock mr-2" aria-hidden="true"></i><?= $item->time()->toDate('H:i') ?></li>
        <li class="list-inline-item"><i class="fas fa-map-marker mr-2" aria-hidden="true"></i><?= $item->place() ?></li>
        <?= e($item->public()->isTrue(), '<li class="badge badge-success badge-pill">Öffentlich</li>') ?>
    </ul>
    </div>
  </div>

  
  
</li>

<?php endforeach ?>
</ul>


</div>
