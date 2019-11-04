<?php

return function ($site) {
  return $site->find('historisches/Prinzenpaare')->children()->listed()->sortBy('uid', 'desc');
};