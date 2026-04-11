<?php

include("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $patient = isset($_POST['patient_name']) ? trim($_POST['patient_name']) : '';
    $blood = isset($_POST['blood_group']) ? $_POST['blood_group'] : '';
    $hospital = isset($_POST['hospital']) ? trim($_POST['hospital']) : '';
    $type = $_POST['patient_type'];
    $city = $_POST['city'];
    $contact = isset($_POST['contact_number']) ? trim($_POST['contact_number']) : '';

    // Security
    $patient = htmlspecialchars($patient);
    $hospital = htmlspecialchars($hospital);
    $contact = htmlspecialchars($contact);
    $valid_groups = ["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"];

    // Validation
    if(empty($patient) || empty($blood) || empty($hospital) || empty($contact) || empty($type) || empty($city)) {
        header("Location: ../request.php?error=1");
        exit();
    }

    if(!preg_match("/^[0-9]{10}$/", $contact)) {
        header("Location: ../request.php?error=2");
        exit();
    }

    // Prepared statement
    $stmt = $conn->prepare("INSERT INTO requests (patient_name, blood_group, hospital, contact_number, patient_type, city)  VALUES (?, ?, ?, ?, ?, ?)");

   $stmt->bind_param("ssssss", $patient, $blood, $hospital, $contact, $type, $city);

    if($stmt->execute()) {
        header("Location: ../request.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>