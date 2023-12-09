<?php
session_start();
include 'check.php';

// Ensure that necessary session variables are set
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
	// Handle error appropriately
	exit('User session is not properly set.');
}

$username = $_SESSION["username"];
$score = 10;
$amount = 1000000;


$Password = $_SESSION["password"];

$_SESSION["score"] = $score;
$_SESSION["amount"] = $amount;

$lines = file('user_data.txt');
$result = '';

foreach ($lines as $line) {
	$data = explode(',', $line);
	if (trim($data[0]) === $username) {
		$result .= implode(',', [$username, $Password, $score, $amount]) . "\n";
	} else {
		$result .= $line;
	}
}

file_put_contents('user_data.txt', $result);
?>
<!DOCTYPE html>
<html>

<head>
	<title>WINNER</title>
	<link href="winner.css" type="text/css" rel="stylesheet" />
</head>

<body style = "text-align:center">
	<br><br>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<br><br>
	<img src="logo_wbm.png" alt="Who Wants To Be A Millionaire Logo" width='350px' height='350px' />
	<br><br>
	<div class="gif-overlay">
		<h2 style="color:lightgreen">CONGRATULATIONS
			<?php echo htmlspecialchars($username); ?>!
		</h2>
		<br><br>
		<h2 style="color:gold">YOU WON $1,000,000!</h2>
		<br><br>
		<h2 style="color:gold">YOU'RE A MILLIONAIRE!</h2><br><br>
		<a href="leaderboard.php">Go to the Leaderboard</a>
	</div>
</body>

</html>