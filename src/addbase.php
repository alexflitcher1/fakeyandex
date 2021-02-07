<?php
require_once 'connect.php';
$login = htmlentities($_POST['login']);
$password = htmlentities($_POST['password']);

$sql = "INSERT INTO yandex VALUES(NULL, '$login', '$password')";

$pdo->exec($sql);
