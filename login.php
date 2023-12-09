<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
	header('Location: home.php');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="background">
	<section>
		<br>
		<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
		<img src="logo_wbm.png" width="350px" height="350px"><br />

		<div>
			<form action="login-submit.php" method="post">

				
				<div>
					<label for="username">Username:</label>
					<input id ="username" type="text" name="username" required="">
				</div>
				<br>
				<div>
					<label for="password">Password:</label>
					<input id="password" type="password" name="password" required="">
				</div>
				
				<br>

				<button>Submit</button><br><br>
			</form>
			<div><a href="registeration.php">Register here</a></div> <br>
		</div>
	</section>
	<a href="index.html">Project Details</a>
	</div>

</body>

</html>