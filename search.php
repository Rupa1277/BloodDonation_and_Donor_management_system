<?php include("config/database.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="hero">
<h1>Find Blood Donors</h1>
<p>Search donors by blood group instantly</p>
</div>

<div class="form-container">

<h2>Search Donor</h2>

<form method="GET">
<select name="bg">
<option value="">Select Blood Group</option>
<option>A+</option>
<option>B+</option>
<option>O+</option>
<option>AB+</option>
</select>
<button class="btn">Search</button>

</form>
</div>

<?php

if(isset($_GET['bg']) && $_GET['bg'] != ""){

$bg = $_GET['bg'];

$result = mysqli_query($conn,"SELECT * FROM donors WHERE blood_group='$bg'");

if(mysqli_num_rows($result) > 0){

echo "<table>";
echo "<tr><th>Name</th><th>Blood Group</th><th>Phone</th><th>Location</th></tr>";

while($row = mysqli_fetch_assoc($result)){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['blood_group']}</td>
<td>{$row['phone']}</td>
<td>{$row['location']}</td>
</tr>";
}

echo "</table>";

}else{
echo "<p style='text-align:center;'>No donors found</p>";
}

}else{
echo "<p style='text-align:center; margin-top:20px;'>Please select a blood group to search donors</p>";
}
?>

<?php include("includes/footer.php"); ?>