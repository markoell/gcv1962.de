<?php

return function ($page) {
  
  $honorations = $page->children()->listed()->groupBy(function ($p) { 
    return $p->category()->toString(); 
  });

  $pageTitle = $page->title()->html();

  return [
    'pageTitle' => $pageTitle,
    'honorations' => $honorations
  ];
};