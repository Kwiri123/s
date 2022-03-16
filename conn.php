<?php
$mysqli = new mysqli("mysql-72352-0.cloudclusters.net","root","slava1231802","nightware");

// Check connection
if ($mysqli -> connect_errno) {
  echo "xueta";
  exit();
}else{
  echo "Yes";
}
?>
