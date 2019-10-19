<?php

$mc = new Memcached();
$mc->addServer("memcached", 11211);

$count = $mc->get("viewCount");

if (intval($count) === 0) {
  $count = 0;
}

$count = $count + 1;

$mc->set("viewCount", $count);

var_dump($count);