<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 9;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 500000;
?>

<html>

<head>
	<title>Question 9</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>Last Question for $1000000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="winner.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>Who made the concepts of web programming easy to learn?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">A. Mr. Louis Henry</td> <!--Correct-->
						<td><input type="radio" name="answer" value="False">B. Mr. Walter White</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="False">C. Mr. Howard Wolowitz</td>
						<td><input type="radio" name="answer" value="False">D. Mr. Sheldon Cooper</td>
					</tr>
				</table>
				<br>

				<input type="submit" value="Submit Answer" class="submit">

			</form>
		</section>
	</div>
</body>


</html>