<?php

return function ($site) {
    return $site->children()->listed()->filterby('num', '<', '5')->flip();
};