<?php include("config/database.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="form-container">
    <h2>Search Donor</h2>

    <form method="GET">

        <select name="blood_group" required>
            <option value="">Select Blood Group</option>
           <?php
            $groups = ["A+","A-","B+","B-","O+","O-","AB+","AB-"];
            foreach($groups as $g){
            $selected = (isset($_GET['blood_group']) && $_GET['blood_group'] == $g) ? "selected" : "";
            echo "<option value='$g' $selected>$g</option>";
            }
            ?>
        </select>

        <input type="text" name="city" placeholder="Enter city" required>

        <button type="submit" class="btn">Search</button>

    </form>
</div>

<?php
if(!empty($_GET['blood_group']) && !empty($_GET['city'])){

    $blood = mysqli_real_escape_string($conn, $_GET['blood_group']);
    $city = mysqli_real_escape_string($conn, $_GET['city']);

    $stmt = $conn->prepare("SELECT * FROM donors WHERE blood_group=? AND city LIKE ?"); 
    $search_city = "%" . $city . "%";
    $stmt->bind_param("ss", $blood, $search_city); 
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<div class='container'>";
    echo "<h2 style='text-align:center;'>Matching Donors</h2>";

    if(mysqli_num_rows($result) > 0){

        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>City</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>";

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['blood_group']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['contact']}</td>
                    <td>
                        <a href='request.php?blood_group={$row['blood_group']}&city={$row['city']}' class='btn btn-danger'>Request</a>
                    </td>
                  </tr>";
        }$stmt->close();

        echo "</table>";
    } else {
        echo "<p class='error-msg'>No donors found for selected criteria</p>";
    }
    echo "</div>";
}
?>

<?php include("includes/footer.php"); ?>