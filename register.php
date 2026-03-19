<?php include("config/database.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<?php
if(isset($_GET['success'])){
echo "<p style='color:green;text-align:center;'>Donor Registered Successfully!</p>";
}
if(isset($_GET['error'])){
echo "<p style='color:red;text-align:center;'>Please fill all required fields!</p>";
}
?>

<div class="form-container">

<h2>Register as Donor</h2>

<form action="donor/register_donor.php" method="POST">
<input type="text" name="name" placeholder="Name" required>
<input type="number" name="age" placeholder="Age" required>
<select name="blood_group">
<option value="">Select Blood Group</option>
<option>A+</option>
<option>B+</option>
<option>O+</option>
<option>AB+</option>
</select>

<input type="text" name="phone" placeholder="Phone">
<input type="text" name="location" placeholder="Location">
<button class="btn">Register</button>
</form>

</div>

<?php include("includes/footer.php"); ?>
</body>
</html>