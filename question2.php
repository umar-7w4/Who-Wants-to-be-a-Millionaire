<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 2;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 1000;
?>

<html>

<head>
	<title>Question 2</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$2500 Question!</h2>
	<br> <br>
	<div class=background>
		<section>
			<form action="question3.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>In the children's book series, where is Paddington Bear originally from?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">A. India</td>
						<td><input type="radio" name="answer" value="true">B. Peru</td><!--Correct-->
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">C. Canada</td>
						<td><input type="radio" name="answer" value="false">D. Iceland</td>
					</tr>
				</table>
				<br>
				<input type="submit" value="Submit Answer" class="submit">
			</form>
		</section>
	</div>
</body>


</html>