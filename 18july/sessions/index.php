<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: login.php");
    exit();
}

// Display user-specific content
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Handling Project</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is the user dashboard.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
