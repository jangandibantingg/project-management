<?php
$server = "localhost";
$database = "project_management";
$username = "root";
$password = "";



$con=mysqli_connect($server,$username,$password,$database);
// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

//
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'ima',
	'host' => 'localhost'
);

// timezone
date_default_timezone_set('Asia/Jakarta');
$datetime=date('Y-m-d H:i:s');
$date=date('Y-m-d');
$jam=date('H:i"s');

?>
