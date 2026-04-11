<?php
include("../config/database.php");

$name = $_POST['name'];
$age = $_POST['age'];
$blood_group = $_POST['blood_group'];
$contact = $_POST['phone'];
$city = $_POST['location'];

if($name != "" && $age != "" && $blood_group != ""){

$stmt = $conn->prepare("INSERT INTO donors(name, age, blood_group, contact, city) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sisss", $name, $age, $blood_group, $contact, $city);

$stmt->execute();

header("Location: ../register.php?success=1");
exit();

}else{
header("Location: ../register.php?error=1");
exit();
}
?>