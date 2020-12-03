<?php 
 require_once('inc/dbconnect.php');  //include database connection
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="body">
		<form action="" method="post" onsubmit="submit">
			<fieldset class="crd">
				<legend><h2>SIGN UP</h2></legend>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first_name" placeholder="Enter First Name"><br>

				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name"><br>

				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Enter Email"><br>

				<label for="tel">Telephone</label>
				<input type="tel" name="tel" id="tel" placeholder="Enter Telephone"><br>

				<label for="dob">Date Of Birth</label>
				<input type="Date" name="dob" id="dob" placeholder="Enter Date Of Birth"><br>

				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Enter Password"><br>

				<button class="btn" type="submit" name="submit" id="submit">Register</button>
				<p>Already have an account<a href="login.php">Log In</a></p>

				
			</fieldset>
		</form>
	</div>

</body>
</html>
<?php mysqli_close($connect); ?> <!--close data base connection-->