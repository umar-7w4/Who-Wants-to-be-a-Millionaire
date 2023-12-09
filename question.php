<!DOCTYPE html>
<?php
session_start();
$score = 0;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 0;
?>
<html>

<head>
	<title>Question</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class=background>
		<section>
			<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
			<img src="logo_wbm.png" width="350px" height="350px">
			<h2>$500 Question!</h2>
			<br><br>
			<form action="question1.php" method="post">
				<table>
					<tr style="height:100px">
						<td colspan=2>The earth is approximately
							how many miles away from the Sun?</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true"> A. 93 Million</td> <!--Correct Answer-->
						<td><input type="radio" name="answer" value="false"> B. 9.3 Million</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"> C. 193 Million</td>
						<td><input type="radio" name="answer" value="false"> D. 39 Million</td>
					</tr>
				</table>
				<br>


				<input type="submit" value="Submit Answer" class="submit">
			</form>
		</section>
	</div>
</body>


</html>