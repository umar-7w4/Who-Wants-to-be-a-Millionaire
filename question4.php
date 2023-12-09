<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 4;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 5000;
?>

<html>

<head>
	<title>Question 4</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$10000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question5.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>Now used to refer to a cat, the word "tabby" is derived from the name of a
							district of what
							world capital?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">A. Baghdad</td><!--Correct-->
						<td><input type="radio" name="answer" value="false">B. New Delhi</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">C. Cairo</td>
						<td><input type="radio" name="answer" value="false">D. Moscow</td>
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