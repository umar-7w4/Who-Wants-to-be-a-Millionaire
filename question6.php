<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 6;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 50000;
?>

<html>

<head>
	<title>Question 6</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$100000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question7.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>What club did astronaut Alan Shepard use to make his famous golf shot on the moon?
						</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">A. Nine iron</td>
						<td><input type="radio" name="answer" value="false">B. Sand wedge</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">C.Six Iron</td> <!--Correct-->
						<td><input type="radio" name="answer" value="false">D. Seven iron</td>
					</tr>
				</table>
				<br>

				<input type="submit" value="Submit Answer" class="submit">
				</p>
			</form>
		</section>
	</div>
</body>


</html>