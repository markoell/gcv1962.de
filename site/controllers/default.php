<?php

return function ($page) {
    $sections = array();
    foreach ($page->children()->listed() as $item) {
        $sections[] = $item;
        foreach ($item->children()->listed() as $subItem) {
            $sections[] = $subItem;
        }
    }

    $popups = $page->children()->listed()->template("popup");

    if($popups->isEmpty()){
        $popups = $page->grandChildren()->listed()->template("popup");
    }

    return [
        'sections' => $sections,
        'popups' => $popups
    ];
};
