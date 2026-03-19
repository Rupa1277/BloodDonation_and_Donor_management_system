<?php include("../includes/header.php"); ?>

<div class="container">
    <div class="form-container">

        <h2>Admin Login</h2>

        <?php if(isset($_GET['error'])) { ?>
            <p class="error-msg">Invalid Username or Password</p>
        <?php } ?>

        <form action="login_handler.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</div>

<?php include("../includes/footer.php"); ?>