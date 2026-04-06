<?php include("auth.php"); ?>
<?php

include("../config/database.php");

$id = intval($_GET['id']);

mysqli_query($conn, "DELETE FROM donors WHERE id=$id");

header("Location: view_donors.php");
exit();
?>