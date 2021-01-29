<?php

$host = "";
$user = "";
$pass = "";
$db = "";

$mysqli = new 
  mysqli("host","user","pass","db");

if ($mysqli -> connect_errno) {
  echo "db connect error" . $mysqli -> connect_error;
  $mysqli -> gain_user;
  exit();
}
?>
