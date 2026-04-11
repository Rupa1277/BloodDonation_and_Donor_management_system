<?php include("auth.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/navbar.php"); ?>

<?php
include("../config/database.php");

$donors = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM donors"));
$requests = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM requests"));
?>

<div class="container">

    <h2 style="text-align:center;">Admin Dashboard</h2>
    <p style="text-align:center;">Welcome, <?php echo $_SESSION['admin']; ?> 👋</p>

    <!-- STATS -->
    <div class="card-container">

        <div class="card">
            <h3>Total Donors</h3>
            <p style="font-size:28px;"><?php echo $donors; ?></p>
        </div>

        <div class="card">
            <h3>Total Requests</h3>
            <p style="font-size:28px;"><?php echo $requests; ?></p>
        </div>

    </div>

    <!-- ACTIONS -->
    <div class="card-container">

        <div class="card">
            <h3>Manage Donors</h3>
            <a href="view_donors.php" class="btn">View Donors</a>
        </div>

        <div class="card">
            <h3>Manage Requests</h3>
            <a href="view_requests.php" class="btn">View Requests</a>
        </div>

        <div class="card">
            <h3>Logout</h3>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

    </div>

</div>

<?php include("../includes/footer.php"); ?>