<?php

### セッションの設定
ini_set('session.save_handler', 'memcached');
ini_set('session.save_path', 'memcached:11211');
session_start();

### カウントアップ（セッション）

$count = $_SESSION['viewCount'];

if (intval($count) === 0) {
  $count = 0;
}

$count = $count + 1;

$_SESSION['viewCount'] = $count;

echo '画面表示回数（セッション）' . $_SESSION['viewCount'] . '回<BR>';

### カウントアップ（Memcachedを直接使う）

$mc = new Memcached();
$mc->addServer("memcached", 11211);

$count = $mc->get("viewCount");

if (intval($count) === 0) {
  $count = 0;
}

$count = $count + 1;

$mc->set("viewCount", $count);

echo '画面表示回数（Memcached直接）' . $count . '回<BR>';
