<?php
$query = $kirby->url('index');
$samePage = substr(Url::last(), 0, strlen($query)) === $query;
?>
<div class="modal fade" id="Prior" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?= $data->title()->html() ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $data->text()->kirbytext()?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
  <?php if (!$samePage): ?>
  <script>
    $(document).ready(function() {
      $('#Prior').modal('show');
    });
  </script>
  <?php endif ?>
</div>