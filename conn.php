<?php
$mysqli = new mysqli("sql11.freemysqlhosting.net","sql11479282","NkNJb5zmlA","sql11479282");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
