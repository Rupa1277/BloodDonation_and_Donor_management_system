<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");

$id = intval($_GET['id']);

// Update status
mysqli_query($conn, "UPDATE requests SET status='Approved' WHERE id=$id");

// Redirect back
header("Location: view_requests.php");
exit();
?>