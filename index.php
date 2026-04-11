<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<!-- HERO SECTION -->
<div class="hero">
    <h1>Donate Blood, Save Lives ❤️</h1>
    <p>Connect donors with patients instantly</p>

    <div>
        <a class="btn" href="register.php">Become Donor</a>
        <a class="btn" href="search.php">Find Donor</a>
    </div>
</div>

<!-- BLOOD GROUP INFO -->
<div class="container">
    <h2 style="text-align:center;">Blood Group Compatibility</h2>

    <div class="card-container">

        <div class="card">
            <h3>A+</h3>
            <p>Donate to A+, AB+<br>Receive from A+, A-, O+, O-</p>
        </div>

        <div class="card">
            <h3>A-</h3>
            <p>Donate to A-, A+, AB-, AB+<br>Receive from A-, O-</p>
        </div>

        <div class="card">
            <h3>B+</h3>
            <p>Donate to B+, AB+<br>Receive from B+, B-, O+, O-</p>
        </div>

        <div class="card">
            <h3>B-</h3>
            <p>Donate to B-, B+, AB-, AB+<br>Receive from B-, O-</p>
        </div>

        <div class="card">
            <h3>AB+</h3>
            <p>Universal Receiver<br>Can receive from all groups</p>
        </div>

        <div class="card">
            <h3>AB-</h3>
            <p>Receive from all negative groups<br>Donate to AB+, AB-</p>
        </div>

        <div class="card">
            <h3>O+</h3>
            <p>Donate to all positive groups<br>Receive from O+, O-</p>
        </div>

        <div class="card">
            <h3>O-</h3>
            <p>Universal Donor<br>Donate to all groups</p>
        </div>

    </div>
</div>

<!-- HEALTH TIPS -->
<div class="container">
    <h2 style="text-align:center;">Health Tips 🏥</h2>

    <div class="form-card">

        <p><strong>Eat Healthy:</strong> Include fruits, vegetables, and whole grains.</p>
        <p><strong>Stay Active:</strong> Exercise at least 30 minutes daily.</p>
        <p><strong>Avoid Smoking:</strong> Protect your lungs and heart.</p>
        <p><strong>Drink Clean Water:</strong> Stay hydrated.</p>
        <p><strong>Regular Checkups:</strong> Monitor your health regularly.</p>

        <br>

        <p style="text-align:center;">
            <a href="https://www.who.int" target="_blank" class="btn">More Tips</a>
        </p>

    </div>
</div>

<?php include("includes/footer.php"); ?>