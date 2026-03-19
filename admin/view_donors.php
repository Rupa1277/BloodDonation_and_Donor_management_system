<?php
session_start();

// Protect page
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../config/database.php");
include("../includes/header.php");
include("../includes/navbar.php");

// Fetch donors
$result = mysqli_query($conn, "SELECT * FROM donors");
?>

<div class="container">
    <h2>Registered Donors</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><a href="delete_donor.php?id=<?php echo $row['id']; ?>"
            class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete this donor?')">Delete</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

<?php include("../includes/footer.php"); ?>