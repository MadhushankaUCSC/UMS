<?php 

$server='localhost';
$user='root';
$password='';
$database='ums';

$connect=mysqli_connect($server,$user,$password,$database);

if(mysqli_connect_error()){
	die('database connection error'.mysql_connect_errorno());
}else{
	//echo('database connection successfull');
}

 ?>