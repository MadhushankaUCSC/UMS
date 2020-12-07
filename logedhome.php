<?php session_start(); ?>
<?php 

 require_once('inc/dbconnect.php');  //include database connection
?>
  

<!DOCTYPE html>
<html>
<head>

	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<div><a href="login.php?user_email=ww" style="float: right;color: orange;padding: 30px;">Log out</a></div>
	<div class="header1">
  <h1>Welcome &ensp;<?php echo $_SESSION['first_name'];?></h1>
 
</div>
</body>
</html>


