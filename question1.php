<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 1;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 500;
?>

<html>

<head>
	<title>Question 1</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>

	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo_wbm.png" width="350px" height="350px"><br />
	<h2>Correct!</h2>
	<h2>$1000 Question!</h2>
	<br> <br>
	<div class=background>
		<section>
			<table>
				<form action="question2.php" method="post">
					<tr style="height:100px">
						<td colspan=2>Which of the following men does not have a chemical element named after him?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"> A. Albert Einstein</td>
						<td><input type="radio" name="answer" value="false"> B. Niels Bohr</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true">C. Isaac Newton</td> <!--Correct-->
						<td><input type="radio" name="answer" value="false"> D. Enrico Fermi</td>
					</tr>
			</table>
			<br>
			<input type="submit" value="Submit Answer" class="submit">
			</form>
		</section>
	</div>
</body>


</html>