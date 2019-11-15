<div class="container pt-2 pb-2">
  <?php
    // setlocale(LC_TIME, "de_DE");
    setlocale(LC_TIME, 'de_DE@euro', 'de_DE', 'de', 'ge');
    $rand = html(Str::random(4))
  ?>

  <ul class="list-group list-group-flush">
    <?php foreach ($dates as $date): ?>
    <li class="list-group-item">
      <?php snippet('termin', ['item' => $date, 'id' => $rand]) ?>
    </li>

    <?php endforeach ?>
  </ul>

  <div class="modal fade" id="hintModal_<?= $rand ?>" tabindex="-1" role="dialog" aria-labelledby="hintModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-info text-light">
        <div class="modal-header">
          <h5 class="modal-title" id="hintModalLabel">Kartenvorverkauf</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <p><strong>Kartenvorverkauf Prunksitzungen und Rosenmontagsball!</strong></p>
            <p>Sie haben Interesse an Eintrittskarten für unsere Veranstaltungen?</p>
            <p>Ab Mittwoch, den <strong>09.12.2019</strong>, sind hier unsere Tickets verfügbar.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>