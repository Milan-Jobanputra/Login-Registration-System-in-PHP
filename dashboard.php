<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Display user's dashboard
echo "Welcome, " . $_SESSION["username"] . "!<br>";
?>

<a href="logout.php">Logout</a>
