<?php 

 require_once('inc/dbconnect.php');  //include database connection
  ?>


<?php


	$first_name= $_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$tele=$_POST['tel'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$hased_password=sha1($password);

	$passwd= base64_encode($password);//encode password
	$eml= base64_encode($email); //encode email
	
	

	if (isset($_POST['submit'])) {
	$query="INSERT INTO users(first_name,last_name,email,telephone,dob,password) VALUES('{$first_name}','{$last_name}','{$email}','{$tele}','{$dob}','{$hased_password}')";

	$result=mysqli_query($connect,$query);//insert data to database

	header("Location: login.php?user_email=$eml&user_password=$passwd");//send encoded email and password to login.php
		
	}
 ?>

 <?php mysqli_close($connect); ?> <!--close data base connection-->