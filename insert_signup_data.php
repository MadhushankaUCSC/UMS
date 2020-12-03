<?php 

 require_once('inc/dbconnect.php');  //include database connection
  ?>


<?php

if (isset($_POST['submit'])) {
	$first_name= $_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$tele=$_POST['tel'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$hased_password=sha1($password);

		
	//print_r($_POST);

	
	$query="INSERT INTO users(first_name,last_name,email,telephone,dob,password) VALUES('{$first_name}','{$last_name}','{$email}','{$tele}','{$dob}','{$hased_password}')";
	$result=mysqli_query($connect,$query);
	header("Location: login.php?user_email=$email&user_password=$password");
	
}

 ?>
 <?php mysqli_close($connect); ?> <!--close data base connection-->