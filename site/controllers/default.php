<?php

return function ($site, $pages, $page) {
    $sections = [];
    
    foreach ($page->children()->listed() as $item) {
        $sections[] = $item;
        foreach ($item->children()->listed() as $subItem) {
            $sections[] = $subItem;
        }
    }
    return compact('sections');
};
