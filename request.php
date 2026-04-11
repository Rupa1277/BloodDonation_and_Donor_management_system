<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="form-container">

    <h2>Request Blood</h2>

    <?php
    // Messages
    if(isset($_GET['error'])){
        if($_GET['error'] == 1){
            echo "<p class='error-msg'>All fields are required</p>";
        }
        elseif($_GET['error'] == 2){
            echo "<p class='error-msg'>Invalid contact number</p>";
        }
        elseif($_GET['error'] == 3){
            echo "<p class='error-msg'>Invalid blood group</p>";
        }
    }

    if(isset($_GET['success'])){
        echo "<p class='success-msg'>Request submitted successfully!</p>";
    }
    ?>

    <form action="request/submit_request.php" method="POST">
        <label>Patient Name</label>
        <input type="text" name="patient_name" placeholder="Patient Name" required>

        <label>Request Type</label>
        <select name="patient_type" required>
            <option value="">Select</option>
            <option value="Patient">Patient</option>
            <option value="Hospital">Hospital</option>
        </select>

        <label>Blood Group</label>
            <select name="blood_group" required>
            <option value="">Select Blood Group</option>

            <?php
            $groups = ["A+","A-","B+","B-","O+","O-","AB+","AB-"];

            foreach($groups as $g){
                $selected = (isset($_GET['blood_group']) && $_GET['blood_group'] == $g) ? "selected" : "";
                echo "<option value='$g' $selected>$g</option>";
            }
            ?>
        </select>

        <label>Hospital</label>
        <input type="text" name="hospital" placeholder="Enter hospital name" required>
        <input type="text" name="city" placeholder="City" 
value="<?php echo isset($_GET['city']) ? htmlspecialchars($_GET['city']) : ''; ?>" required>
        <label>Contact Number</label>
        <input type="text" name="contact_number" placeholder="Contact Number" required pattern="[0-9]{10}">

        <button type="submit" class="btn">Submit Request</button>

    </form>

</div>

<?php include("includes/footer.php"); ?>