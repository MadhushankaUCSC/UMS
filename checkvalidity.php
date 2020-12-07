 
<?php session_start(); ?>
<?php 

 require_once('inc/dbconnect.php');  //include database connection
  ?>
<?php 

$user_name=$_POST['email'];
$user_password=   sha1($_POST['password']);  //hashed password
//echo $user_name;
$query1="SELECT * FROM users WHERE email='{$user_name}' AND password='{$user_password}' LIMIT 1 ";



if(isset($_POST['submit'])){
	$result=mysqli_query($connect,$query1);
	$user=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)==1){ //check if there is a result
		$_SESSION['first_name']=$user['first_name'];//create session variable
		$_SESSION['id']=$user['user_id'];
		header("Location:logedhome.php");//redirect
	}
}	
 ?>
<?php mysqli_close($connect) ?><!--close data base connection-->