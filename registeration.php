<!DOCTYPE html>
<html>
<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<section class="background">
		<br>
		<div class="reg_heading">
			<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
		</div>
		
		<img src="logo_wbm.png" width="350px" height="350px"><br/>
		
		<div>
			<h1 class="reg_heading">Register to Play</h1>
		</div>
		<br>
		<div>
			<form action="register-submit.php" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input id="reg_username" type="text" name="username" required=""></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input id="reg_password" type="password" name="password1" required=""></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input id="reg_cpassword" type="password" name="password2" required=""></td>
					</tr>
				</table>
				<br>
					
				<button>Submit</button>
				<br><br>
				<a href="login.php">Already Registered? Login here</a>
			</form>
		</div>
	</section>
	
</body>
</html>