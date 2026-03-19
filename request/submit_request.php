<?php

include("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $patient = $_POST['patient_name'];
    $blood = $_POST['blood_group'];
    $hospital = $_POST['hospital'];
    $contact = $_POST['contact_number'];

    // Validation
    if(empty($patient) || empty($blood) || empty($hospital) || empty($contact)) {
        die("All fields are required");
    }

    if(!preg_match("/^[0-9]{10}$/", $contact)) {
        die("Invalid contact number");
    }

    // ✅ PREPARED STATEMENT (PUT HERE)
    $stmt = $conn->prepare("INSERT INTO requests (patient_name, blood_group, hospital, contact_number) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $patient, $blood, $hospital, $contact);

    if($stmt->execute()) {
        header("Location: ../request.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>