<?php

return function ($page) {
  
  $honorations = $page->children()->listed();
  $pageTitle = $page->title()->html();

  $result = [];

  foreach($honorations as $honoration){
    $key = $honoration->category()->toString();
    
    if(array_key_exists($key, $result)){
      $result[$key][] = $honoration;
    }
    else {
      $result[$key] = [$honoration];
    }    
  }

  return [
    'pageTitle' => $pageTitle,
    'honorations' => $result
  ];
};