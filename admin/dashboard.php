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

    <div class="card">
    <h3>Total Donors</h3>
    <p><?php echo $donors; ?></p>
</div>

<div class="card">
    <h3>Total Requests</h3>
    <p><?php echo $requests; ?></p>
</div>

</div>


<?php include("../includes/footer.php"); ?>