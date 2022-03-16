<?php
$mysqli = new mysqli("mysql-72352-0.cloudclusters.net","root","1W7BQhFE","root");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "Yes";
}
?>
