<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container">
<?php if(isset($_GET['success'])) { ?>
    <p class="success-msg">Request submitted successfully!</p>
<?php } ?>
    <div class="form-card">
        <h2>Request Blood</h2>
        <p class="subtitle">Fill the details to request blood</p>

        <form action="request/submit_request.php" method="POST">
            <label>Patient Name</label>
            <input type="text" name="patient_name" placeholder="Enter patient name" required>

            <label>Blood Group</label>
            <select name="blood_group" required>
                <option value="">Select Blood Group</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>

            <label>Hospital</label>
            <input type="text" name="hospital" placeholder="Enter hospital name" required>
            <label>Contact Number</label>
            <input type="text" name="contact_number" placeholder="Enter contact number" required pattern="[0-9]{10}">
            <button type="submit" class="btn">Submit Request</button>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>