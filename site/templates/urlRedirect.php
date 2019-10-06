<?php
$target = $page->target();

try {
  go($url = $target, $code = 302);

} catch(Exception $e) {

  echo $e->getMessage();

}