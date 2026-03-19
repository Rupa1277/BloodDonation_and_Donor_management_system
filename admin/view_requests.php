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

// Fetch requests
$result = mysqli_query($conn, "SELECT * FROM requests");
?>

<div class="container">
    <h2>Blood Requests</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Blood Group</th>
            <th>Hospital</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['patient_name']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['hospital']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['status']; ?></td>

            <td>
                <?php if($row['status'] == 'Pending') { ?>
                    <a href="approve_request.php?id=<?php echo $row['id']; ?>" 
                       class="btn"
                       onclick="return confirm('Approve this request?')">
                       Approve
                    </a>
                <?php } else { ?>
                    <span style="color:green; font-weight:bold;">Approved</span>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

<?php include("../includes/footer.php"); ?>