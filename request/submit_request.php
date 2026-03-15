<?php

include("../config/database.php");

$patient = $_POST['patient_name'];
$blood = $_POST['blood_group'];
$hospital = $_POST['hospital'];
$contact = $_POST['contact_number'];

$sql = "INSERT INTO requests(patient_name,blood_group,hospital,contact_number)
VALUES('$patient','$blood','$hospital','$contact')";

mysqli_query($conn,$sql);

echo "Blood Request Submitted";

?>