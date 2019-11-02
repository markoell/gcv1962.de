<?php

return function ($site) {
  return $site->find('historisches/praesidenten')->children()->listed();
};