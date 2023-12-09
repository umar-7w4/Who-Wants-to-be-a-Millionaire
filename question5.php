<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 5;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 10000;
?>

<html>

<head>
	<title>Question 5</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$50000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question6.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>If you planted the seeds of Quercus robur, what would grow?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">A. Flowers</td>
						<td><input type="radio" name="answer" value="false">B. Vegetables</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">C. Trees</td> <!--Correct-->
						<td><input type="radio" name="answer" value="false">D. Grain</td>
					</tr>
				</table>
				<br>

				<input type="submit" value="Submit Answer" class="submit">

			</form>
		</section>
	</div>
</body>


</html>