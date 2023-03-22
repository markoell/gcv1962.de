<?php

return function ($site, $page, $kirby){
    $popups = $page->children()->listed()->template("popup");

    if($popups->isEmpty()){
        $popups = $page->grandChildren()->listed()->template("popup");
    }

    return [
        'popups' => $popups,
        'termine' => $kirby->collection("datesOverview")
    ];
};