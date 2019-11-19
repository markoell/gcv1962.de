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
</div>