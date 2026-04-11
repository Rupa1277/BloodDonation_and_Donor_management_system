<?php include("auth.php"); ?>
<?php include("../config/database.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/navbar.php"); ?>

<?php
$result = mysqli_query($conn, "SELECT * FROM requests ORDER BY request_id DESC");
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
            <th>Type</th>
            <th>City</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['request_id']; ?></td>
            <td><?php echo $row['patient_name']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['hospital']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['patient_type']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['created_at']; ?></td>

            <!-- STATUS -->
            <td>
                <?php
                if($row['status'] == 'Approved'){
                    echo "<span style='color:green;font-weight:bold;'>Approved</span>";
                }
                elseif($row['status'] == 'Rejected'){
                    echo "<span style='color:red;font-weight:bold;'>Rejected</span>";
                }
                else{
                    echo "<span style='color:orange;font-weight:bold;'>Pending</span>";
                }
                ?>
            </td>

            <!-- ACTION -->
            <td>
                <?php if($row['status'] == 'Pending') { ?>

                    <a href="approve_request.php?id=<?php echo $row['request_id']; ?>"  
                       class="btn"
                       onclick="return confirm('Approve this request?')">
                       Approve
                    </a>

                    <a href="reject_request.php?id=<?php echo $row['request_id']; ?>" 
                       class="btn btn-danger"
                       onclick="return confirm('Reject this request?')">
                       Reject
                    </a>

                <?php } ?>

                <br><br>

                <a href="match_donors.php?blood=<?php echo urlencode($row['blood_group']); ?>&city=<?php echo urlencode($row['city']); ?>" 
                    class="btn">
                    View Donors
                    </a>
            </td>

        </tr>
        <?php } ?>

    </table>
</div>

<?php include("../includes/footer.php"); ?>