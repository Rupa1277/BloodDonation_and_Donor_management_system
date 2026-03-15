<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Request Blood</h2>

<form action="request_handler/submit_request.php" method="POST">

Patient Name:<br>
<input type="text" name="patient_name"><br>

Blood Group:<br>
<input type="text" name="blood_group"><br>

Hospital:<br>
<input type="text" name="hospital"><br>

Contact Number:<br>
<input type="text" name="contact_number"><br><br>

<input type="submit" value="Submit Request">

</form>
</body>
</html>
