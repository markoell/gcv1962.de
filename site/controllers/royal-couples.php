<?php

return function ($page) {
  
  $couples = $page->children()->listed()->sortBy('uid', 'desc');

  $currentCouple = $couples->first();
  $previousCouples = $couples->offset(1);

  return [
    
    'currentCouple' => $currentCouple,
    'previousCouples' => $previousCouples
  ];
};