<?php

return function ($site) {
    return $site->find('dates')->children()->listed();
};
