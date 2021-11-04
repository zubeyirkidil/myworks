<?php 

$username="zubeyirkidil";
$password="81yahkiD24";
$server="185.216.113.35";
$dbName="zubeyirkidil";



$connect=mysqli_connect($server,$username,$password);

$connect-> set_charset("utf8");

if(!$connect){

	echo "Connect Error: ".mysqli_errno();
	exit();
}

$db=mysqli_select_db($connect,$dbName);
if(!$db){

	echo "Database Error: ".mysqli_error(); echo "<br>";

	exit();
}


?>