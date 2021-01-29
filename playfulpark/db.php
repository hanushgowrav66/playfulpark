<?php

$con = mysqli_connect("localhost","root","","park");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>