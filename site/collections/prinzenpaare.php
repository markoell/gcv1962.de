<?php

return function ($site) {
  return $site->find('historisches/prinzenpaare')->children()->listed()->sortBy('uid', 'desc');
};