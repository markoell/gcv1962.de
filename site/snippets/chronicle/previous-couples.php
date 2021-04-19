<?php if($data != null): ?>
  <?php foreach($data as $item): ?>
    <div class="col mb-4">
      <?php snippet('chronicle/royal-couple', array('data' => $item)); ?>
    </div>
  <?php endforeach ?>
<?php endif ?>