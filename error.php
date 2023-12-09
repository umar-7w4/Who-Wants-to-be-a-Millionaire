<?php
    // Turning off error reporting on the frontend
    ini_set('display_errors', 0);
    error_reporting(E_ALL); // Report all errors, but don't display them

    // Set the absolute path for session storage
    $sessionPath = __DIR__ . "/session";
    if (!file_exists($sessionPath)) {
        mkdir($sessionPath, 0777, true);
    }
    session_save_path($sessionPath);

    // Start the session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Check if an error message is set in the session and retrieve it
    $error = isset($_SESSION["error"]) ? $_SESSION["error"] : 'Username or password incorrect! Please try again.';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <link href="error.css" type="text/css" rel="stylesheet" />
</head>
<body style="text-align:center">
    <br><br><br><br>
    <img src="error.png" width="500px" height="200px"><br>
    <br>
    <h2 class="error-message"><?php echo htmlspecialchars($error); ?></h2>
</body>
</html>
