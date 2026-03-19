<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/header.php");
include("../includes/navbar.php");
?>

<div class="container">
    <h2>Admin Dashboard</h2>

    <div class="card-container">

        <div class="card">
            <h3>View Donors</h3>
            <a href="view_donors.php" class="btn">Open</a>
        </div>

        <div class="card">
            <h3>View Requests</h3>
            <a href="view_requests.php" class="btn">Open</a>
        </div>

    </div>
</div>

<?php include("../includes/footer.php"); ?>