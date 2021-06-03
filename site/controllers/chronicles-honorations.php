<?php

return function ($page) {
  
  $honorations = $page->children()->listed();
  $pageTitle = $page->title()->html();

  $result = array();

  foreach($honorations as $honoration){
    $key = $honoration->category()->toString();
    
    if(array_key_exists($key, $result)){
      $result[$key][] = $honoration;
    }
    else {
      $result[$key] = array($honoration);
    }    
  }

  return [
    'pageTitle' => $pageTitle,
    'honorations' => $result
  ];
};