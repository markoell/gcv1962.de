<?php if($data != null): ?>

<div class="w-100"></div>

<?php $n = 0; foreach($data as $item):

  $n++;
  if($item == $current) {
    continue;
  } 

  snippet('chronik/prinzenpaar', array('data' => $item));

endforeach ?>

<?php endif ?>