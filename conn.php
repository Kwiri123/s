<?php
$mysqli = new mysqli("sql4.freemysqlhosting.net","sql4479459","l5taK4X6gf","sql4479459");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Yes";
}
?>
