<?php

return function ($page) {
  
  $couples = $page->children()->listed()->sortBy('uid', 'desc');

  $firstCouple = $couples->first();
  $secondCouple = $couples->nth(1);
  $thirdCouple = $couples->nth(2);
  $previousCouples = $couples->offset(3);

  return [
    
    'firstCouple' => $firstCouple,
    'secondCouple' => $secondCouple,
    'thirdCouple' => $thirdCouple,
    'previousCouples' => $previousCouples
  ];
};