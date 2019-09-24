<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "jquixdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpassword, $dbname) or die("unable to connect to database");
mysqli_select_db($con, $dbname) or ("could not select database");

if (!$con) {
	# code...
	die ("connection failed " . mysqli_connect_error());
}
