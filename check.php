<?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

    function updateUserScore($username, $password, $score, $amount) {
        $lines = file('user_data.txt');
        $updatedContent = '';

        foreach ($lines as $line) {
            $data = explode(',', trim($line));
            if ($data[0] === $username) {
                $updatedContent .= implode(',', [$username, $password, $score, $amount]) . "\n";
            } else {
                $updatedContent .= $line;
            }
        }

        return file_put_contents('user_data.txt', $updatedContent);
    }

    $answer = $_POST['answer'] ?? '';
    $isCorrect = strcasecmp($answer, "true") === 0;
    $username = $_SESSION["username"];
    $password = $_SESSION["password"]; 
    $score = $_SESSION["score"];
    $amount = $_SESSION["amount"];

    if (!$isCorrect) {
        if (updateUserScore($username, $password, $score, $amount) === false) {
            // Handle file write error
            error_log("Error writing to user_data.txt");
        }
        header("Location: loser.php");
        exit;
    }

?>
