<?php
include("config/database.php");
?>

<h2>Search Donor</h2>

<form method="GET">

Blood Group:
<select name="blood_group">
<option>A+</option>
<option>B+</option>
<option>O+</option>
<option>AB+</option>
</select>

<input type="submit" value="Search">

</form>

<hr>

<?php

if(isset($_GET['blood_group'])){

$bg = $_GET['blood_group'];

$sql = "SELECT * FROM donors WHERE blood_group='$bg'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

echo "Name: ".$row['name']."<br>";
echo "Phone: ".$row['phone']."<br>";
echo "Location: ".$row['location']."<br>";
echo "<hr>";

}

}

?>