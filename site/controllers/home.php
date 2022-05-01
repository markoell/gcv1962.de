<?php

return function ($site, $pages, $page){
    $popups = $page->children()->listed()->template("popup");

    if($popups->isEmpty()){
        $popups = $page->grandChildren()->listed()->template("popup");
    }

    return [
        'popups' => $popups
    ];
};