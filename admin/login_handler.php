<?php
session_start();
include("../config/database.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Simple hardcoded admin (you can store in DB later)
if($username == "admin" && $password == "admin123") {
    $_SESSION['admin'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>