<?php

return function ($site, $pages, $page) {
    $sections = array();
    
    foreach ($page->children()->visible() as $item) {
        $sections[] = $item;
        foreach ($item->children()->visible() as $subItem) {
            $sections[] = $subItem;
        }
    }
    return compact('sections');
};
