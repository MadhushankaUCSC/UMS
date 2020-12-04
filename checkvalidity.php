 

<?php 

 require_once('inc/dbconnect.php');  //include database connection
  ?>
<?php 

$user_name=$_POST['email'];
$user_password=$_POST['password'];
//echo $user_name;
$query1="SELECT email FROM users WHERE email='{$user_name}' LIMIT 1 ";
$result=mysqli_query($connect,$query1);
//$user=mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
	if($result){
		header("Location:home.php");
	}
}	
 ?>
<?php mysqli_close($connect) ?><!--close data base connection-->