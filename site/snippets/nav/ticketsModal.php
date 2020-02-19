<?php 
  $dates = $kirby->collection("datesOverview");
  $items = $kirby->collection("openDates")->filterBy('categories', 'tickets', ',');
?>

<div class="modal fade text-center" id="modalTickets" tabindex="-1" role="dialog" aria-labelledby="modalTicketsTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTicketsTitle"><?= $dates->title()->html() ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php snippet('termine', array('dates' => $items)) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>