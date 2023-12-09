<?php
	session_start();
	session_save_path("session");

	$username = $_POST["username"];
	$password = $_POST["password"];

	$user_infile = "";
	$password_infile = "";

	$user_data = fopen("user_data.txt", "r");

	while(! feof($user_data)){
		$user_array = fgetcsv($user_data);

		if ($user_array[0] == $username){
			$user_infile = $user_array[0];
			$password_infile = $user_array[1];
			break;
		}
		
	}

	if ($password == $password_infile){
		$_SESSION["loggedin"] = true;
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header('Location: home.php');
		exit();
	}
	else{
		$_SESSION["error"] = "Username or Password is incorrect";
		header('Location: error.php');	
		exit();
	}
	
?>