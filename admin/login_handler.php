<?php
session_start();
include("../config/database.php");

$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Get admin by username
$stmt = $conn->prepare("SELECT * FROM admin WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows === 1){

    $row = $result->fetch_assoc();

    // Verify hashed password
    if(password_verify($password, $row['password'])){
        $_SESSION['admin'] = $row['username'];

        header("Location: dashboard.php");
        exit();
    }
}

// If failed
header("Location: login.php?error=1");
exit();
?>