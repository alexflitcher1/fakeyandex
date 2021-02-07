<?php

require_once 'connect.php';
$all = $pdo->query("SELECT * FROM yandex");

foreach ($all as $key => $value) {
  echo "{$value['login']}:{$value['password']}<br>";
}
