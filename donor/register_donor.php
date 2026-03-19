<?php

include("../config/database.php");

$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$phone = $_POST['phone'];
$location = $_POST['location'];

/* VALIDATION */
if($name != "" && $age != "" && $blood_group != ""){

$sql = "INSERT INTO donors(name,age,blood_group,phone,location)
VALUES('$name','$age','$blood_group','$phone','$location')";

mysqli_query($conn,$sql);

/* REDIRECT */
header("Location: ../register.php?success=1");
exit();

}else{

header("Location: ../register.php?error=1");
exit();

}
?>