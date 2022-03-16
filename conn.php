<?php
$mysqli = new mysqli("remotemysql.com","x2PaabisLE","doCzUKvGic","x2PaabisLE");

// Check connection
if ($mysqli -> connect_errno) {
  echo "xueta";
  exit();
}else{
  echo "Yes";
}
?>
