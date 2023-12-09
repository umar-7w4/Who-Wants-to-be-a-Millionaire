<?php
session_start();

$userInputName = $_POST["username"];
$userInputPassword = $_POST["password1"];
$confirmedPassword = $_POST["password2"];
$initialScore = 0;

if ($userInputPassword !== $confirmedPassword) {
	$_SESSION["error"] = "The passwords do not match.";
	header('Location: error.php');
	exit();
}

if (empty($userInputName) || empty($userInputPassword) || empty($confirmedPassword)) {
	$_SESSION["error"] = "Username or password fields cannot be empty.";
	header('Location: error.php');
	exit();
}

$fileHandle = fopen("user_data.txt", "a");
$userDataLine = $userInputName . "," . $userInputPassword . "," . $initialScore . PHP_EOL;
fwrite($fileHandle, $userDataLine);
fclose($fileHandle);

header('Location: login.php');
exit();
?>