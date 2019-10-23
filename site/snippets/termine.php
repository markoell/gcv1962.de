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
  <div class="col">
    <h5 class="text-uppercase text-left"><?= $item->title()->html() ?></h5>
    <ul class="list-inline text-justify">
            <li class="list-inline-item"><i class="far fa-calendar mr-2" aria-hidden="true"></i><?= $item->date()->toDate('l') ?></li>
            <li class="list-inline-item"><i class="far fa-clock mr-2" aria-hidden="true"></i><?= $item->time()->toDate('H:i') ?></li>
            <li class="list-inline-item"><i class="fas fa-map-marker mr-2" aria-hidden="true"></i><?= $item->place() ?></li>
            <?= e($item->public()->isTrue(), '<li class="badge badge-success badge-pill">Öffentlich</li>') ?>
    </ul>
  </div>
  <?php if($item->target()->isNotEmpty()): ?>
  <div class="col-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#datesModal"><?= $item->targettext()->html()?><?php $item->targettext() ?></button>
  </div>
  <?php endif ?>
  </div>

  
  
</li>

<?php endforeach ?>
</ul>

<div class="modal fade" id="datesModal" tabindex="-1" role="dialog" aria-labelledby="datesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-info text-light">
      <div class="modal-header">
        <h5 class="modal-title" id="datesModalLabel">Kartenvorverkauf</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
        <p><strong>Kartenvorverkauf Prunksitzungen und Rosenmontagsball!</strong></p>
<p>Sie haben Interesse an Eintrittskarten für unsere Veranstaltungen?</p>
<p>Ab Mittwoch, den <strong>09.12.2019</strong>, sind hier unsere Tickets verfügbar.</p>    </div>
      </div>
    </div>
  </div>
</div>
</div>
