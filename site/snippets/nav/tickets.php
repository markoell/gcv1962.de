<?php $tmp = page('home/Termine') ?>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalTickets">
  Tickets
</button>

<div class="modal fade" id="modalTickets" tabindex="-1" role="dialog" aria-labelledby="modalTicketsTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTicketsTitle"><?= $tmp->title()->html() ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php snippet('termine', array('dates' => $tmp->dates()->toStructure()->filterBy('targettext', 'Tickets'))) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>