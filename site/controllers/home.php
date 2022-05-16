<?php

return function ($kirby, $site, $pages, $page){
    $popups = $page->children()->listed()->template("popup");

    if($popups->isEmpty()){
        $popups = $page->grandChildren()->listed()->template("popup");
    }

    $termine = $kirby->collection("datesOverview");
    $taschengeldJob = page('home/Taschengeldjob');
    $werbung = page('home/ihre-werbung');

    return [
        'popups' => $popups,
        'termine' => $termine,
        'taschengeldJob' => $taschengeldJob,
        'werbung' => $werbung
    ];
};