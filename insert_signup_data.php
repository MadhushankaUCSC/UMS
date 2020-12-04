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

		
	//print_r($_POST);

	if (isset($_POST['submit'])) {
	$query="INSERT INTO users(first_name,last_name,email,telephone,dob,password) VALUES('{$first_name}','{$last_name}','{$email}','{$tele}','{$dob}','{$hased_password}')";
	$result=mysqli_query($connect,$query);
	header("Location: login.php?user_email=$email&user_password=$password");
	
		
	}
 ?>
 <?php
	/*if (isset($_POST['log'])){
	header("Location: login.php?user_email=ww&user_password=11");
	}
 if(isset($_GET['user_email'])){
    $link=$_GET['user_email'];
   
        header("Location: login.php?user_email= $link");
    }*/
 ?>
 <?php mysqli_close($connect); ?> <!--close data base connection-->