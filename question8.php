<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 8;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 250000;
?>

<html>

<head>
	<title>Question 8</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$500000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question9.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>Which king was married to Eleanor of Aquitaine?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">A. Henry II</td><!--Correct-->
						<td><input type="radio" name="answer" value="false">B. Henry I</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">C. Henry V</td>
						<td><input type="radio" name="answer" value="false">D. Richard I</td>
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