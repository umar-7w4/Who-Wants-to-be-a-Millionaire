<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 7;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 100000;
?>

<html>

<head>
	<title>Question 7</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$250000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question8.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>Neurologists believe that the brain's medial ventral prefrontal cortex is
							activated when you
							do what?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false">A. Have a panic attack</td>
						<td><input type="radio" name="answer" value="false">B. Remember
							a name</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">C. Get a Joke</td> <!--Correct-->
						<td><input type="radio" name="answer" value="false">D. Listen to music</td>
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