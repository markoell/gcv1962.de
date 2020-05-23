<?php
  $dates = $kirby->collection("datesOverview");
  $items = $kirby->collection("openDates");
?>

<div class="col-sm text-center">
  <img
    src="<?=  asset('/assets/images/gcvLogo.svg')->url() ?>"
    class="logo mx-auto d-block py-2" alt="Kater Logo">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalAppointments">
    <?= $dates->title()->html()  ?>
  </button>
  <!-- Modal -->
  <div class="modal fade" id="modalAppointments" tabindex="-1" role="dialog"
    aria-labelledby="modalAppointmentsTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAppointmentsTitle"><?= $dates->title()->html() ?>
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
</div>