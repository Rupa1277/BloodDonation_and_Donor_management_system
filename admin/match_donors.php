<?php include("auth.php"); ?>
<?php include("../config/database.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/navbar.php"); ?>

<?php
$blood = isset($_GET['blood']) ? trim($_GET['blood']) : '';
$city = isset($_GET['city']) ? trim($_GET['city']) : '';

// Prepared query
$stmt = $conn->prepare("
    SELECT * FROM donors 
    WHERE TRIM(blood_group) = TRIM(?)
    ORDER BY 
        CASE 
            WHEN LOWER(city) LIKE LOWER(?) THEN 1
            ELSE 2
        END
");

$search_city = "%" . $city . "%";
$stmt->bind_param("ss", $blood, $search_city);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container">

    <h2 style="text-align:center;">
        Matching Donors for <?php echo htmlspecialchars($blood); ?> in <?php echo htmlspecialchars($city); ?>
    </h2>

    <?php if($result->num_rows > 0){ ?>

    <table>
        <tr>
            <th>Match</th>
            <th>Name</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>

        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>

            <td>
                <?php 
                if(stripos($row['city'], $city) !== false){
                    echo "<span style='color:green;font-weight:bold;'>📍 Same City</span>";
                } else {
                    echo "<span style='color:#555;'>🌍 Other City</span>";
                }
                ?>
            </td>

            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['blood_group']); ?></td>
            <td><?php echo htmlspecialchars($row['city']); ?></td>
            <td><?php echo htmlspecialchars($row['contact']); ?></td>

            <td>
                <a href="tel:<?php echo $row['contact']; ?>" class="btn">Call</a>
            </td>

        </tr>
        <?php } ?>

    </table>

    <?php } else { ?>
        <p class="error-msg">No matching donors found</p>
    <?php } ?>

    <a href="view_requests.php" class="btn">← Back</a>

</div>

<?php include("../includes/footer.php"); ?>