<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 3;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 2500;
?>

<html>

<head>
	<title>Question 3</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$5000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question4.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>Who did artist Grant Wood use as the model for the farmer in his classic painting
							"American
							Gothic"?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">A. Travelling salesman</td>
						<td><input type="radio" name="answer" value="true">B. His Dentist</td><!--Correct-->
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">C. His butcher</td>
						<td><input type="radio" name="answer" value="false">D. Local Sheriff</td>
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