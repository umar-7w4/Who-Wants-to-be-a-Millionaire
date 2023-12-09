<?php
    $users = file("user_data.txt");
    $userLine = array();
    $usernScore = array();
    $userName;
    $userScore;
    $leaderboardCount = 0;
    $lengthOfLeaderboard = 5;

    foreach($users as $line){
        $userLine[] = explode(",", $line);

        foreach($userLine as $user){
            $usernScore[$user[0]] = $user[2];
        }
    }
    arsort($usernScore, SORT_NATURAL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <link href="leaderboard.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<h1>LEADERBOARD</h1>
	

    <br><br><br><br><br><br><br><br><br><br>
    <table id="container">
    <tbody>
    <tr class="head">
        <th>Rank</th>
    	<th>Participants</th>
    	<th>Scores</th>
    </tr>
    <?php
    foreach($usernScore as $key => $value){
        $leaderboardCount++;
        echo"
        <tr class=row>
            <td class=name>$leaderboardCount</td>
            <td class=rank>$key</td>
            <td class=score>$value</td>
        </tr>";
        if($leaderboardCount == $lengthOfLeaderboard){
            break;
        }
    }
    ?>
    </tbody>
    </table>
    <br>
    <div class="utButtons">
        <button onclick="document.location='home.php'">Try Again</button>
        <button onclick="document.location='logout.php'">Log Out</button>
    </div>
</body>
</html>