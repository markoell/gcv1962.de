<?php

return function ($site, $pages, $page) {
    $children = $page->children()->visible()->sortBy('uid', 'desc');
    return compact('children');
};
