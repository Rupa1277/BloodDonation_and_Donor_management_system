<!DOCTYPE html>
<html>
<head>
<title>Register Donor</title>
</head>

<body>

<h2>Donor Registration</h2>

<form action="donor/register_donor.php" method="POST">

Name:<br>
<input type="text" name="name"><br>

Age:<br>
<input type="number" name="age"><br>

Blood Group:<br>
<select name="blood_group">
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select><br>

Phone:<br>
<input type="text" name="phone"><br>

Location:<br>
<input type="text" name="location"><br><br>

<input type="submit" value="Register">

</form>

</body>
</html>