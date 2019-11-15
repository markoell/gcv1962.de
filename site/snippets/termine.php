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
            <p><strong>“Pulverschnee und Sonnenschein – Hüttengaudi in Gundelsheim!”</strong></p>
            <p>Sie haben Interesse an Karten für eine unserer Veranstaltungen, dann klicken sie
            <a href="https://secure.deskapp.de/shop/gcv1962/cat/index/sCategory/50" style="color: white; text-decoration: underline; text-transform: uppercase;">hier</a>
            um zu unserem Online-Kartenvorverkauf zu gelangen.</p>
            <p>Der Ticketverkauf startet ab dem <strong>11.12.2019.</strong></p>
            <p>Zusätzlich gibt es die Möglichkeit am <strong>07.12.2019 von 13 bis 14 Uhr</strong> im Vereinsheim des GCV, Roemheldstraße (neben der Deutschmeisterhalle) Tickets zu erwerben.</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>