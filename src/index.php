<?php

if ($_GET['r']) {
  require_once $_GET['r'] . '.php';
} else {
  require_once 'auth.php';
}
