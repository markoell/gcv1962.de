<?php $rand = html(Str::random(4)) ?>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_<?= $rand ?>">
  <?= $page->title()->html()  ?>
</button>

<!-- Modal -->
<div class="modal fade" id="modal_<?= $rand ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog <?= e($page->large(), "modal-xl ") ?>modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalTitle"><?= $page->title()->html() ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?= snippet('tools/kirbycontent', array('item' => $page)); ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Schließen</button>
        </div>
        </div>
    </div>
</div>