

<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	
</head>
<body>
	<div class="background">
		<div class="card">
			<form method="post" action="" >
				<fieldset>
					<legend><h2>LOGIN</h2></legend>
					<label for="email">Email</label><!--email lable-->
					<input type="email" name="email" id="email"  placeholder="Enter Email" value="<?php if($_GET['user_email']=='ww'){
						echo '';}else{echo base64_decode($_GET['user_email']) ;} ?>"><!-- input email box-->
 
					<label for="password">Password</label><!--password lable-->
					<input type="password" name="password" id="password" placeholder="Enter Password" value="<?php if($_GET['user_email']=='ww'){
						echo '';}else{echo base64_decode($_GET['user_password']) ;} ?>" ><!-- input password box-->

					<button  class="btn" type="submit" id="submit">Log In</button><br>
				</fieldset>
			</form>
		</div>
	</div>

</body>
</html>