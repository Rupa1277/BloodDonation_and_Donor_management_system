<?php

include("../config/database.php");

$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$phone = $_POST['phone'];
$location = $_POST['location'];

$sql = "INSERT INTO donors(name,age,blood_group,phone,location)
VALUES('$name','$age','$blood_group','$phone','$location')";

mysqli_query($conn,$sql);

echo "Donor Registered Successfully";

?>