<?php

$connect = mysqli_connect('localhost', 'root','', 'kasimall');

if (mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno();
}

 
date_default_timezone_set('Africa/Harare');
$error="";

function validate($str) {
	return trim(htmlspecialchars($str));
}
?>