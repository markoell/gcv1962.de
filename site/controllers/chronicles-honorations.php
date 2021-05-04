<?php

return function ($page) {
  
  $honorations = $page->children()->listed();
  $pageTitle = $page->title()->html();

  return [
    'pageTitle' => $pageTitle,
    'honorations' => $honorations
  ];
};