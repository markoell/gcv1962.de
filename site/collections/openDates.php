<?php

return function ($site) {
 
  // fetch children with a date from today and in the future
    return $site->find('dates')->children()->listed()->filter(function ($child) {
        return $child->date()->toDate() >= strtotime("today");
    });
};
